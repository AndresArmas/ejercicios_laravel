<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function  home (){
        return view('home');
    }

    public function  instalacion (){
        return view('instalacion');
    }
}
