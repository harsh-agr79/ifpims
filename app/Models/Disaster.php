<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Disaster extends Model
{
    protected $fillable = [
        'area',
        'longitude',
        'lattitude',
        'image',
        'env_reading',
        'analysis',
    ];
}
