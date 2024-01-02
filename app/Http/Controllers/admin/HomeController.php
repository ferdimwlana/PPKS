<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    function index(){
        return view('welcome');
        // return public_path();
    }
    function login(){
        return view('login');
    }

    function register(){
    return view('register');
}
}
