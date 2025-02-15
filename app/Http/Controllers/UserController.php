<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(){
        return view('users.register');
    }
    
    // public function store(Request $request)
    // {
    //     $formFields = $request->validate([
    //         'name' => ['required','min:3'],
    //         'email' => ['required', 'email',Rule::unique('users', 'email')],
    //         'password' => ['required', 'min:8','confirmed']
    //     ]);
    //     $formFields['password'] = bcrypt($formFields['password']);
    //     $user = User::create($formFields);
    //     Auth::login($user);
    //     return redirect('/')->with('message', 'User Created successfully and logged in');
    // }
    
    public function login(){
        return view('users.login');
    }
}
