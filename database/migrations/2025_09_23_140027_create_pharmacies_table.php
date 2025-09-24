<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('pharmacies', function (Blueprint $table) {
            $table->id();

            // Basic info
            $table->string('pharmacy_name');
            $table->string('email');
            $table->string('phone_number');
            $table->string('license_number');
            $table->string('reg_authority')->nullable();
            $table->integer('years_in_op')->nullable();
            $table->date('date_registered')->nullable();

            // Owner info
            $table->string('owner_name');
            $table->string('owner_gender')->nullable();
            $table->string('contact_person_phone');

            // Address
            $table->string('physical_address');
            $table->string('city');
            $table->string('country');
            $table->string('postal_code')->nullable();
            $table->text('google_maps_link')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();

            // Operating details
            $table->string('opening_days')->nullable();
            $table->string('opening_hours')->nullable();
            $table->boolean('emergency_hours')->default(false);
            $table->boolean('online_orders')->default(false);
            $table->boolean('delivery_available')->default(false);
            $table->text('service_areas')->nullable();

            // Login info
            $table->string('login_username');
            $table->string('login_email');
            $table->string('password');

            // Files
            $table->string('pharmacy_license_path');
            $table->string('owner_id_path');
            $table->string('store_front_photo_path')->nullable();
            $table->string('interior_photo_path')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('pharmacies');
    }
};
