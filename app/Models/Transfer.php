<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    protected $fillable = [
        'name_current_owner',
        'cpf_current_owner',
        'address_current_owner',
        'address_current_owner',
        'phone_current_owner',
        'name_former_owner',
        'address_former_owner',
        'receipt_date',
        'submission_date',
        'plate_vehicle',
        'model_vehicle',
        'renavan_vehicle',
        'sale_price',
    ];
}
