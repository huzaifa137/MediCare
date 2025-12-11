<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $fillable = [
        'name',
        'category_name',
        'price',
        'sale_price',
        'quantity',
        'sku',
        'description',
        'manufacturer',
        'expiry_date',
        'dosage',
        'pharmacy_id',
    ];

    // Relationships
    public function images()
    {
        return $this->hasMany(MedicineImage::class);
    }


    public function pharmacy()
    {
        return $this->belongsTo(Pharmacy::class);
    }
}
