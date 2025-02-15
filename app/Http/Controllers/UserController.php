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
    
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required','min:3'],
            'email' => ['required', 'email',Rule::unique('users', 'email')],
            'password' => ['required', 'min:8','confirmed']
        ]);
        $formFields['password'] = bcrypt($formFields['password']);
        $user = User::create($formFields);
        Auth::login($user);
        return redirect('/')->with('message', 'User Created successfully and logged in');
    }
    
    public function login(){
        return view('users.login');
    }
    public function auth(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        if (Auth::attempt($formFields)) {
            $request->session()->regenerate();
            return redirect('/')->with('message', 'User logged in');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
