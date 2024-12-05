<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DriverStats;
use App\Models\DriverPics;

class Driver extends Model
{
    use HasFactory;

    public function pics()
    {
        return $this->hasOne(DriverPics::class);
    }

    public function driverstats()
    {
        return $this->belongsTo(DriverStats::class);
    }
}
