<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('doctors', function (Blueprint $table) {
        $table->id();

        // Personal Info
        $table->string('fullName');
        $table->string('email')->unique();
        $table->string('phoneNumber');
        $table->string('gender');
        $table->date('dob');

        // Professional Info
        $table->string('licenseNumber');
        $table->string('issuingBody');
        $table->integer('experience');
        $table->string('specialization');
        $table->string('subSpecialization')->nullable();
        $table->text('qualifications');
        $table->string('university');
        $table->text('languages');

        // Availability & Consultation
        $table->text('availableDays'); // Could use JSON if structured
        $table->text('timeSlots');     // Could use JSON if structured
        $table->string('consultationMethod');
        $table->decimal('consultationFee', 8, 2);
        $table->string('currency');
        $table->integer('maxPatients');

        // Online Presence
        $table->string('linkedin')->nullable();
        $table->string('website')->nullable();
        $table->text('articles')->nullable();

        // Auth
        $table->string('password');

        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
