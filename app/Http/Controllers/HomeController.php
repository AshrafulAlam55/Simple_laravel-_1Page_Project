<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     function HomePage(Request $request) {
        return view('home');
    }
}
