<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function login(){
        return View ('login');
    }


    public function loginproses(){
        if (auth()->guard('admin')->attempt(['username' => request('username'), 'password' => request('password')])){
            return redirect('admin')->with('success', 'Login Berhasil');
        }

        return redirect('login');
    }

    public function logout(){

		auth()->guard('admin')->logout();
        return redirect('login');
    }
}
