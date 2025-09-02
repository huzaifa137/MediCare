<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            // Login Credentials
            $table->string('username')->unique()->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('password')->nullable();

            // User Role and Status
            $table->integer('user_role')->default(0); // 0: Student, 1: Admin, 5: Farmer, etc.
            $table->integer('account_status')->default(10); // 10: Active, 0: Banned, etc.
            $table->integer('registration_status')->default(0);

            // Profile Info
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->enum('gender', ['male', 'female', 'other'])->nullable();
            $table->string('phonenumber')->nullable();
            $table->string('country')->nullable();

            // Security / Verification
            $table->integer('temp_otp')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('last_login_at')->nullable();
            $table->string('profile_photo')->nullable();

            // Laravel Defaults
            $table->rememberToken();
            $table->timestamps();

            // Indexes
            $table->index('username');
            $table->index('email');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};
