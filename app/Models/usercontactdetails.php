<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class usercontactdetails extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'user_contact_details';
    protected $primaryKey = 'Customerid';
    protected $fillable =
    [
        'Name',
        'mailid',
        'contactnumber',
        'state',
        'MotherTongue',

    ];

}
