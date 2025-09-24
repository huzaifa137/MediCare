<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable()->index();
            $table->string('full_name');
            $table->string('phone_number')->unique();
            $table->string('email')->unique();
            $table->string('gender');
            $table->date('dob');
            $table->string('nationality')->nullable();
            $table->text('medical_conditions')->nullable();
            $table->text('allergies')->nullable();
            $table->text('medications')->nullable();
            $table->string('smoking_status')->nullable();
            $table->string('alcohol_consumption')->nullable();
            $table->text('recent_surgeries')->nullable();
            $table->string('consultation_type')->nullable();
            $table->string('preferred_doctor_gender')->nullable();
            $table->string('preferred_language')->nullable();
            $table->string('best_time')->nullable();
            $table->string('emergency_name')->nullable();;
            $table->string('emergency_relationship')->nullable();;
            $table->string('emergency_phone')->nullable();
            $table->string('emergency_email')->nullable();
            $table->string('insurance_provider')->nullable();
            $table->string('insurance_id')->nullable();
            $table->string('referred_by')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
