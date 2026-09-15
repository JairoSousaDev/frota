<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Outlay extends Model
{
    protected $fillable = [
        'value',
        'date_outlays',
        'description',
    ];
}
