<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    use HasFactory;

    protected $fillable = [
        'pharmacy_name',
        'email',
        'phone_number',
        'license_number',
        'reg_authority',
        'years_in_op',
        'date_registered',
        'owner_name',
        'owner_gender',
        'contact_person_phone',
        'physical_address',
        'city',
        'country',
        'postal_code',
        'google_maps_link',
        'latitude',
        'longitude',
        'opening_days',
        'opening_hours',
        'emergency_hours',
        'online_orders',
        'delivery_available',
        'service_areas',
        'login_username',
        'login_email',
        'password',
        'pharmacy_license_path',
        'owner_id_path',
        'store_front_photo_path',
        'interior_photo_path',
    ];
}
