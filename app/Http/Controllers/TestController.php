<?php

namespace App\Http\Controllers;

use App\Models\MatrimonyUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function test_function()
    {
        return app(MatrimonyUsers::class)->where('matrimony_users_id',1)->get();
    }
}
