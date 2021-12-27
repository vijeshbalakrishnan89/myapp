<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\vehicleinfomodel;

class vehiclecontroller extends Controller
{
    public function insert_vehicle_info(Request  $request)
    {
        $data = $request->all();
        //(inser data into table)
        vehicleinfomodel::create($data);
    }
}
