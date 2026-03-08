<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('tryout_submissions', function (Blueprint $table) {
            // Hapus foreign key lama
            $table->dropForeign(['study_package_id']);
            $table->dropColumn('study_package_id');
            
            // Tambahkan polymorphic columns
            $table->morphs('tryoutable'); // Menambahkan tryoutable_id dan tryoutable_type
        });
    }

    public function down(): void
    {
        Schema::table('tryout_submissions', function (Blueprint $table) {
            $table->dropMorphs('tryoutable');
            $table->foreignId('study_package_id')->constrained()->onDelete('cascade');
        });
    }
};
