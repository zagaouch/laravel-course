<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// lose the control
// come back
// add oumima to the project
class HomeController extends Controller
{
    //
    public function home(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
}
