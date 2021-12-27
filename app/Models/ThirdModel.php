<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThirdModel extends Model
{
    use HasFactory;
    protected $table = 'third_table';
    protected $primaryKey = 'third_table_user_id';
    protected $fillable =
    [
        'vehicle_name',
        'vehicle_model',
        'vehicle_year_of_manufacture',
        'vehicle_engine_power',
        'vehicle_seat capacit'

    ];
}
