<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matrimonymodel extends Model
{
    use HasFactory;
    protected $table = 'matrimony';
    protected $primaryKey = 'm_id';
    protected $fillable =
    [
        'm_Category',
        'BM',
        'CBS',
        

    ];
}
