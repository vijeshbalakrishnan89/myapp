<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatrimonyUsers extends Model
{
    use HasFactory;
    protected $table = 'matrimony_users';
    protected $primaryKey = 'matrimony_users_id';

    protected $fillable = [
        'name',
        'designation'
    ];
}
