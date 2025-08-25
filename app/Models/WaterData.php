<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WaterData extends Model
{
    protected $fillable = ['created_date', 'water_ph', 'TDS', 'water_temp'];
}
