<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebViewsController extends Controller
{
    public function about(){
        return view("about");
    }

    public function contact(){
        return view("contact");
    }

    public function login(){
        return view("auth.login");
    }

    public function register(){
        return view("auth.register");
    }
}
