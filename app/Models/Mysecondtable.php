<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mysecondtable extends Model
{
    use HasFactory;
    protected $table = 'mysecondtable';
    protected $primaryKey = 'mysecondtable_user_id';
    protected $fillable = [
        'name',
        'primary_address',
        'secondery_address',
        'primary_phone_number',
        'secondery_phone_number',
        'email'

    ];

}
