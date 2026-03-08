<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_study_package', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('study_package_id')->constrained()->onDelete('cascade');
            $table->timestamp('expired_at')->nullable(); // Masa berlaku paket
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_study_package');
    }
};
