<?php

namespace App\Http\Controllers;

class ContactController extends Controller
{
    public function getAll()
    {
       return Contact::get();
    }
}
