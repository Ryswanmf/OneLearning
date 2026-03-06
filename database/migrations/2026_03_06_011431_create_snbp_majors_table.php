<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('snbp_majors', function (Blueprint $table) {
            $table->id();
            $table->string('university_name');
            $table->string('major_name');
            $table->string('category')->default('SAINTEK'); // SAINTEK / SOSHUM
            $table->integer('capacity')->default(0); // Daya Tampung
            $table->integer('applicants')->default(0); // Peminat Tahun Lalu
            $table->decimal('passing_grade', 5, 2)->nullable(); // Estimasi Passing Grade
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('snbp_majors');
    }
};
