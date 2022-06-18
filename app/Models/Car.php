<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'mark',
        'model',
        'generation',
        'year',
        'run',
        'color',
        'bodyType',
        'engineType',
        'transmission',
        'gearType',
        'generation_id'
    ];
}
