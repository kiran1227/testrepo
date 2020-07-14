<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function header(){
        return view('front.header');
    }

    public function home(){
        return view('front.home');
    }

    public function footer(){
        return view('front.footer');
    }

}
