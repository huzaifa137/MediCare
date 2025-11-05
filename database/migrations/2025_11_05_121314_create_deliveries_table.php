<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('fullName')->nullable();
            $table->string('email')->nullable();
            $table->string('phoneNumber')->nullable();
            $table->string('gender')->nullable();

            $table->string('vehicleType')->nullable();
            $table->string('vehicleNumber')->nullable();
            $table->string('vehicleInsurance')->nullable();

            $table->string('bankName')->nullable();
            $table->string('accountNumber')->nullable();

            $table->string('availableDays')->nullable();
            $table->string('availableHours')->nullable();

            $table->string('governmentIdPath')->nullable();
            $table->string('backgroundCheckPath')->nullable();
            $table->string('trainingCertPath')->nullable();

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('deliveries');
    }
};
