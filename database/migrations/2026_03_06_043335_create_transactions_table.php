<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('reference_id')->unique(); // ID Transaksi Unik (contoh: INV-20240306-001)
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('study_package_id')->constrained()->onDelete('cascade');
            $table->decimal('amount', 12, 2);
            $table->string('payment_method')->nullable();
            $table->string('proof_of_payment')->nullable(); // Path gambar bukti transfer
            $table->enum('status', ['pending', 'verification', 'success', 'failed'])->default('pending');
            $table->text('admin_note')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
