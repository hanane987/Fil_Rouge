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
        Schema::table('reservations', function (Blueprint $table) {
            
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            
            // Add estheticien_id column
            $table->foreignId('estheticien_id')->constrained()->onDelete('cascade');
            
            // Add service_id column
            $table->foreignId('service_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
            
            // Drop estheticien_id column
            $table->dropForeign(['estheticien_id']);
            $table->dropColumn('estheticien_id');
            
            // Drop service_id column
            $table->dropForeign(['service_id']);
            $table->dropColumn('service_id');
        });
    }
};
