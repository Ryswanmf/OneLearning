<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('tryout_submissions', function (Blueprint $table) {
            $table->json('score_metadata')->nullable()->after('score');
        });
    }

    public function down(): void
    {
        Schema::table('tryout_submissions', function (Blueprint $table) {
            $table->dropColumn('score_metadata');
        });
    }
};
