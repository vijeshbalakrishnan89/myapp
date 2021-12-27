<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicleinfomodel extends Model
{
    use HasFactory;
    protected $table = 'vehicletable';
    protected $primaryKey = 'vehicle_id';
    protected $fillable =
    [
        'vehicle_brand',
        'vehicle_model',
        'vehicle_variants',
        'vehicle_manufacturer_year',
        'vehicle_seat_capacity',
        'vehicle_engine_power'

    ];
}
