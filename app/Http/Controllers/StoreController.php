<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Storemodel;
use Illuminate\Support\Facades\Validator;

class StoreController extends Controller
{

     //========Validation Start========
  public function create_iteminfo(Request $request)
  {
      $data = $request->all();
      $validated = Validator::make($data,[
          'item_name'       => 'required|string|max:255',
          'item_price'       => 'required|string|max:255',
          'item_weight'    => 'required|string|max:255'
          
      ]);

      if ($validated->fails()) {
          abort(412,'Validation error');
      }
      //======Validation End========
      //======insert Start=========
      app(storemodel::class)->create($data); 
      //======insert End============
    }
    //====================UPDATE START====================
    public function update_iteminfo(Request $request)
    {
        $data = $request->all();
        $validated = Validator::make($data,[
            'item_name'        => 'required|string|max:255',
            'item_price'       => 'required|string|max:255',
            'item_weight'      => 'required|string|max:255'
        ]);
        if ($validated->fails()) {
            $errors = $validated->errors();
            abort(412,'Validation error');
        }
        app(storemodel::class)
                    ->where('shop_id',$data['shop_id'])->update($data); 

    }
//====================UPDATE END========================

  
    
}
