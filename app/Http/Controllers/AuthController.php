<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function formLogin()
    {
        if(Auth::check())
        {
            return redirect()->route('home');
        }

        return view('login');
    }

    public function login(Request $request)
    {
        $login = $request->validate(
        [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($login)) 
        {
            $request->session()->regenerate();

            return redirect()->intended('home');
        }

        return back()->withErrors(
        [
            'email' => 'The provided credentials do not match our records.',
        ])  ->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
