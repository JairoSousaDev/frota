<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vehicle extends Model
{
    protected $fillable = [
        'model_vehicle',
        'brand_vehicle',
        'plate_vehicle',
        'year_vehicle',
        'chassi_vehicle',
        'crv_vehicle',
        'renavan_vehicle',
        'color_vehicle',
        'status_vehicle',
        'observation_vehicle',
    ];

    public function sales() : HasMany
    {
        return $this->hasMany(Sale::class);   
    }
}
