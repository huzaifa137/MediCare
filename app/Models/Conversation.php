<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    protected $fillable = ['doctor_id', 'patient_id', 'pharmacy_id'];

    // Doctor relationship
    public function doctor()
    {
        return $this->belongsTo(\App\Models\Doctor::class, 'doctor_id');
    }

    // Pharmacy relationship
    public function pharmacy()
    {
        return $this->belongsTo(\App\Models\User::class, 'pharmacy_id'); // Assuming pharmacies are in users table
    }

    // Patient relationship
    public function patient()
    {
        return $this->belongsTo(\App\Models\Patient::class, 'patient_id');
    }

    // Messages
    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    // Last message
    public function lastMessage()
    {
        return $this->hasOne(Message::class)->latestOfMany();
    }
}
