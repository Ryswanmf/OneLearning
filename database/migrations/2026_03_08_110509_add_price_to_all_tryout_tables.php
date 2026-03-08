<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        $tables = ['sd_tryouts', 'smp_tryouts', 'sma_tryouts', 'sma_utbk_tryouts', 'alumni_tryouts'];
        
        foreach ($tables as $table) {
            Schema::table($table, function (Blueprint $table) {
                if (!Schema::hasColumn($table->getTable(), 'price')) {
                    $table->decimal('price', 12, 2)->default(0)->after('duration_minutes');
                }
            });
        }
    }

    public function down(): void
    {
        $tables = ['sd_tryouts', 'smp_tryouts', 'sma_tryouts', 'sma_utbk_tryouts', 'alumni_tryouts'];
        
        foreach ($tables as $table) {
            Schema::table($table, function (Blueprint $table) {
                if (Schema::hasColumn($table->getTable(), 'price')) {
                    $table->dropColumn('price');
                }
            });
        }
    }
};
