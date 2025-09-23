<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'full_name',
        'phone_number',
        'email',
        'gender',
        'dob',
        'nationality',
        'medical_conditions',
        'allergies',
        'medications',
        'smoking_status',
        'alcohol_consumption',
        'recent_surgeries',
        'consultation_type',
        'preferred_doctor_gender',
        'preferred_language',
        'best_time',
        'emergency_name',
        'emergency_relationship',
        'emergency_phone',
        'emergency_email',
        'insurance_provider',
        'insurance_id',
        'referred_by',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
