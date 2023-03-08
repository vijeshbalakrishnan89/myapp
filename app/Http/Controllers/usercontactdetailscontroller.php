<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usercontactdetails;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\UserController;
use Auth;



class usercontactdetailscontroller extends Controller
{
     //========Validation Start========
  public function create_usercontactdetails(Request $request)
  {
      $data = $request->all();
      $validated = Validator::make($data,[
          'Name'           => 'required|string|max:255',
          'mailid'         => 'required|string|max:255',
          'contactnumber'  => 'required|string|max:255',
          'state'          => 'required|string|max:255',
          'MotherTongue'   => 'required|string|max:255',

          
      ]);

      if ($validated->fails()) {
          abort(412,'Validation error');
      }
    
      //======Validation End======
     //======insert Start=========
 app(usercontactdetails::class)->create($data); 
    //======insert End============
    }
     //====================UPDATE START====================
     public function update_usercontactdetails(Request $request,$id)
     {
         $data = $request->all();
         $validated = Validator::make($data,[
             'Name'           => 'required|string|max:255', 
             'mailid'         => 'required|string|max:255',
             'contactnumber'  => 'required|string|max:255',
             'state'          => 'required|string|max:255',
             'MotherTongue'   => 'required|string|max:255'
         ]);
         if ($validated->fails()) {
             $errors = $validated->errors();
             abort(412,'Validation error');
         }
         return usercontactdetails::where('Customerid',$id)->update($data); 
 
     }
 //====================UPDATE END========================
 //====================Show table start========================
 public function select_usercontactdetails()
 {
    return usercontactdetails::select('Name','mailid','state')->get();
 }
 //===========================Show Table END=========================
 //====================Show single user ========================
 public function showsingleUsr_usercontactdetails()
 {
    // return usercontactdetails::where('Customerid')->get(); 
    $customer_id = usercontactdetails::user('Customerid')->id;
    //return usercontactdetails('tasks.showByUserId', [ "task" => $task]);
 }
 //===========================Show Table END=========================
 public function helloWorld(Request $request){

    return json_encode(['status' => 200 , 'message' => "Hello Vijesh"]);
 }
}