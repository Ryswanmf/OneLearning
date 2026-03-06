<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sd_tryouts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('subject'); // Matematika, IPA, Bahasa Indonesia, dll
            $table->integer('question_count')->default(0);
            $table->integer('duration_minutes')->default(0);
            $table->enum('status', ['published', 'draft'])->default('draft');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sd_tryouts');
    }
};
