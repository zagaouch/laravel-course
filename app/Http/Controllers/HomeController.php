<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// lose the control
// come back
// come ba
// come back
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
