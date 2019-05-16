<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function home(){
        return view ('home');
    }

    public function acercade(){
        return view('acercade');
    }

    public function contactenos(){
        return view('contactenos');
    }

    public function quienessomos(){
        return view ('quienessomos');
    }
}
