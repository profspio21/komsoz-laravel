<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Monolog\Handler\FingersCrossed\ActivationStrategyInterface;

class LoginController extends Controller
{
    public function index() {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        // $request->validate([
        //     'email' => 'required|email:dns',
        //     'password' => 'required'
        // ]);

        // dd('good');
        
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('welcome');
        }

        return back()->withErrors('loginError','Login Failed');
    }
}
