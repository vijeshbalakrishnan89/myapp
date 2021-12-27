<?php

namespace App\Http\Controllers;

use App\Models\Mysecondtable;
use App\Models\ThirdModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function get_user_details($id)
    {
        return app(Mysecondtable::class)->where('mysecondtable_user_id',$id)->get();
    }
    public function create_user_details(Request $request)
    {
        $data = $request->all();
        $validated = Validator::make($data,[
            'name'                  => 'required|string|max:255',
            'primary_address'       => 'required|string|max:255',
            'secondery_address'     => 'required|string|max:255',
            'primary_phone_number'  => 'required|string|max:10|min:10',
            'secondery_phone_number'=> 'required|string||max:10|min:10',
            'email'                 => 'required|email||unique:mysecondtable',

        ]);
        if ($validated->fails()) {
            abort(412,'Validation error');
        }
        app(Mysecondtable::class)->create($data); 

    }
    public function update_user_details(Request $request,$id)
    {
        $data = $request->all();
        $validated = Validator::make($data,[
            'name'                  => 'required|string|max:255',
            'primary_address'       => 'required|string|max:255',
            'secondery_address'     => 'required|string|max:255',
            'primary_phone_number'  => 'required|digits:10',
            'secondery_phone_number'=> 'required|digits:10',
            'email'                 => 'required'
        ]);
        if ($validated->fails()) {
            $errors = $validated->errors();
            abort(412,'Validation error');
        }
        app(Mysecondtable::class)
                    ->where('mysecondtable_user_id',$id)->update($data); 

    }
    public function delete_user_details(Request $request,$id)
    {

    }
    public function insert_vehicle_details(Request  $request)
    {
        $data = $request->all();
       
        $insert_array =[
            'vehicle_name'                  => $data['vehicle_name'],
            'vehicle_model'                 => $data['vehicle_model'],
            'vehicle_year_of_manufacture'   => $data['vehicle_year_of_manufacture'],
            'vehicle_engine_power'          => $data['vehicle_engine_power'],
            'vehicle_seat capacit'          => $data['vehicle_seat capacit']

        ];

         //dd($insert_array);
        $result = app(ThirdModel::class)->create($insert_array); 
        
        //For returning responseto front end
        if($result){

            return json_encode(['status' => 200 ,'message' => 'Vehicle Details added successfully']);
        }
        else{

            return json_encode(['status' => 400 , 'message' => 'Vehicle Details addition failed']); 
        }

    }
}
