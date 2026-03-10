<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Fungsi pembantu untuk tambah index jika belum ada
        $addIndexIfMissing = function ($table, $column, $name = null) {
            $name = $name ?: "{$table}_{$column}_index";
            $indexes = DB::select("SHOW INDEX FROM {$table} WHERE Key_name = '{$name}'");
            if (empty($indexes)) {
                Schema::table($table, function (Blueprint $table) use ($column, $name) {
                    $table->index($column, $name);
                });
            }
        };

        // Tryout Tables
        $tryoutTables = ['utbk_tryouts', 'sd_tryouts', 'smp_tryouts', 'sma_tryouts', 'sma_utbk_tryouts', 'alumni_tryouts'];
        foreach ($tryoutTables as $table) {
            $addIndexIfMissing($table, 'status');
        }

        $addIndexIfMissing('products', 'is_featured');
        $addIndexIfMissing('study_packages', 'is_active');
        $addIndexIfMissing('blogs', 'status');
        $addIndexIfMissing('questions', ['questionable_id', 'questionable_type'], 'questions_morph_index');
        $addIndexIfMissing('tryout_submissions', ['user_id', 'status'], 'submissions_user_status_index');
        $addIndexIfMissing('tryout_submissions', ['tryoutable_id', 'tryoutable_type'], 'sub_morph_idx');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Down logic with safety
        $dropIndexIfExists = function ($table, $name) {
            $indexes = DB::select("SHOW INDEX FROM {$table} WHERE Key_name = '{$name}'");
            if (!empty($indexes)) {
                Schema::table($table, function (Blueprint $table) use ($name) {
                    $table->dropIndex($name);
                });
            }
        };

        $tryoutTables = ['utbk_tryouts', 'sd_tryouts', 'smp_tryouts', 'sma_tryouts', 'sma_utbk_tryouts', 'alumni_tryouts'];
        foreach ($tryoutTables as $table) {
            $dropIndexIfExists($table, "{$table}_status_index");
        }
        
        $dropIndexIfExists('products', 'products_is_featured_index');
        $dropIndexIfExists('study_packages', 'study_packages_is_active_index');
        $dropIndexIfExists('blogs', 'blogs_status_index');
        $dropIndexIfExists('questions', 'questions_morph_index');
        $dropIndexIfExists('tryout_submissions', 'submissions_user_status_index');
        $dropIndexIfExists('tryout_submissions', 'sub_morph_idx');
    }
};
