<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Ubah Tabel Transactions
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropForeign(['study_package_id']);
            $table->dropColumn('study_package_id');
            $table->morphs('buyable'); // Menambahkan buyable_id dan buyable_type
        });

        // Ubah Tabel Akses (user_study_package)
        Schema::table('user_study_package', function (Blueprint $table) {
            $table->dropForeign(['study_package_id']);
            $table->dropColumn('study_package_id');
            $table->morphs('accessible'); // Menambahkan accessible_id dan accessible_type
        });
    }

    public function down(): void
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropMorphs('buyable');
            $table->foreignId('study_package_id')->nullable()->constrained()->onDelete('cascade');
        });

        Schema::table('user_study_package', function (Blueprint $table) {
            $table->dropMorphs('accessible');
            $table->foreignId('study_package_id')->nullable()->constrained()->onDelete('cascade');
        });
    }
};
