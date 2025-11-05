<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'fullName',
        'email',
        'phoneNumber',
        'gender',
        'vehicleType',
        'vehicleNumber',
        'vehicleInsurance',
        'bankName',
        'accountNumber',
        'availableDays',
        'availableHours',
        'governmentIdPath',
        'backgroundCheckPath',
        'trainingCertPath',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
