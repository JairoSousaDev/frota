<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
