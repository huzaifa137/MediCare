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
        Schema::table('conversations', function (Blueprint $table) {
            $table->unsignedBigInteger('pharmacy_id')->nullable()->after('doctor_id');

            // Optional: add foreign key constraint if you want referential integrity
            // $table->foreign('pharmacy_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('conversations', function (Blueprint $table) {
            $table->dropColumn('pharmacy_id');

            // If you added the foreign key, drop it first
            // $table->dropForeign(['pharmacy_id']);
        });
    }
};
