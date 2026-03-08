<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('questions', function (Blueprint $table) {
            // Hapus foreign key lama
            $table->dropForeign(['study_package_id']);
            $table->dropColumn('study_package_id');
            
            // Tambahkan polymorphic columns
            $table->morphs('questionable'); // Menambahkan questionable_id dan questionable_type
        });
    }

    public function down(): void
    {
        Schema::table('questions', function (Blueprint $table) {
            $table->dropMorphs('questionable');
            $table->foreignId('study_package_id')->constrained()->onDelete('cascade');
        });
    }
};
