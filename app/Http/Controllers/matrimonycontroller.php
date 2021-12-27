<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\matrimonymodel;         

class matrimonycontroller extends Controller
{
    public function insert_matrimony_info(Request  $request)
    {
        $data = $request->all();
        //(inser data into table)
       matrimonymodel::create($data);
    }
}
