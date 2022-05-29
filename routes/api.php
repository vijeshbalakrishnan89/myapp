<?php

use App\Http\Controllers\productcontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

$api = app('Dingo\Api\Routing\Router');
$api->version('v1',function ($api) 
{
    
         $api->group(['namespace' => 'App\Http\Controllers'], function ($api)
    {

       $api->get('user/{id}','UserController@get_user_details');
       $api->put('user/{id}','UserController@update_user_details');
       $api->delete('user/{id}','UserController@delete_user_details');
       // $api->post('vehicleinfo','vehiclecontroller@insert_vehicle_info');
        //  $api->post('Productinfo','productcontroller@insert_product_detail');
       // $api->post('matrimonyinfo','matrimonycontroller@insert_matrimony_info');
        $api->post('iteminfo','storecontroller@create_iteminfo');
        $api->put('iteminfo','storecontroller@update_iteminfo');
    
    }
);

}
);
