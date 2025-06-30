<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Return a simple view or whatever you want here
        return view('home');
    }
}
