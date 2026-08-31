<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $fillable = [
        'customer_name',
        'seller_name',
        'plate_vehicle',
        'model_vehicle',
        'receipt_date',
        'submission_date',
        'observation',
    ];
}
