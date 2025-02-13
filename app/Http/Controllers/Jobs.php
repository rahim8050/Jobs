<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Jobs extends Controller
{
    public function login()
    {
        return view('users.login');
    }
    public function table(){
        return view('visualisation.table');
    }
    public function register(){
        return view('users.register');
    }
}
