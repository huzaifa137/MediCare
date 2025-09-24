<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = ['service_category_id', 'title', 'description', 'image'];

    public function serviceCategory()
    {
        return $this->belongsTo(ServiceCategory::class);
    }
}

