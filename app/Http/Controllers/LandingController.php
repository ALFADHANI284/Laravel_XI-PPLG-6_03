<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index() // Nama Function
    {
        return view('landing'); // landing  
    }
}
