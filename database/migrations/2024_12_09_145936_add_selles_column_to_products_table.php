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
        Schema::table('products', function (Blueprint $table) {
            $table->boolean('selles')->default(false);
            $table->boolean('low')->default(false);
            $table->boolean('teraz')->default(false);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('selles'); // حذف العمود إذا تم التراجع
            $table->dropColumn('low'); // حذف العمود إذا تم التراجع
            $table->dropColumn('teraz'); // حذف العمود إذا تم التراجع
        });
    }
};
