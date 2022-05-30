<?php

use App\Http\Controllers\productcontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

$api = app('Dingo\Api\Routing\Router');
$api->version('v1',function ($api)
{
    
         $api->group(['namespace' => 'App\Http\Controllers'], function ($api)
    {

      
      // $api->post('usercontactdetails','usercontactdetailscontroller@create_usercontactdetails');
      // $api->put('usercontactdetails/{id}','usercontactdetailscontroller@update_usercontactdetails');
         $api->get('contacts','usercontactdetailscontroller@select_usercontactdetails');
    }
);
}
);      

