<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'fullName',
        'email',
        'user_id',
        'phoneNumber',
        'gender',
        'dob',
        'licenseNumber',
        'issuingBody',
        'experience',
        'specialization',
        'subSpecialization',
        'qualifications',
        'university',
        'languages',
        'availableDays',
        'timeSlots',
        'consultationMethod',
        'consultationFee',
        'currency',
        'maxPatients',
        'linkedin',
        'website',
        'articles',
        'password',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'email', 'email');
    }


}
