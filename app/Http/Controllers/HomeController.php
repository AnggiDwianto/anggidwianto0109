<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function menu(){
        return view ("menu");
    }
    public function home(){
        return view ("home");
    }
    public function artikel(){
        return view ("artikel");
    }
    public function contact(){
        return view ("contact");
    }
}
