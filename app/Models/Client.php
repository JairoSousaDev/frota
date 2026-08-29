<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    protected $fillable = [
        'name_client',
        'cpf_client',
        'rg_client',
        'phone_client',
        'email_client',
        'state_client',
        'city_client',
        'district_client',
        'number_client',
        'address_client',
        'observation_client',
    ];

    public function sales(): HasMany
    {
        return $this->hasMany(Sale::class);
    }
}
