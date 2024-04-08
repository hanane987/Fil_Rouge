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
        Schema::table('estheticiens', function (Blueprint $table) {
            $table->string('work_name')->nullable()->after('image');
            $table->decimal('price', 8, 2)->nullable()->after('work_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('estheticiens', function (Blueprint $table) {
            $table->dropColumn('work_name');
            $table->dropColumn('price');
        });
    }
};
