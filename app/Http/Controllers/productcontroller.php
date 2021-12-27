<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productmodel;

class productcontroller extends Controller
{
    public function insert_product_detail(Request  $request)
    {
        $data = $request->all();
        //(inser data into table)
       productmodel::create($data,
       [
        'product_name'        => 'required|string|without_spaces|nullable|max:255',
        'product_model'       => 'required|string|nullable|max:255',
        'product_sr_number'   => 'required|string|nullable|max:255',
        'product_warrenty'    => 'required|string|nullable|']);

       //For returning responseto front end
       if($data){

        return json_encode(['status' => 200 ,'message' => 'Product Details added successfully']);
    }
    else{

        return json_encode(['status' => 400 , 'message' => 'Product Details addition failed']); 
    }


    }
    
}
