<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storemodel extends Model
{
    use HasFactory;
    protected $table = 'store';
    protected $primaryKey = 'store_id';
    protected $fillable =
    [
        'item_name',
        'item_price',
        'item_weight',
    ];
}
