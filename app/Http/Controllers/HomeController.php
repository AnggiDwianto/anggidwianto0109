<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function menu0109(){
        return view ("menu0109");
    }
    public function home0109(){
        return view ("home0109");
    }
    public function artikel0109(){
        return view ("artikel0109");
    }
    public function contact0109(){
        return view ("contact0109");
    }
}
