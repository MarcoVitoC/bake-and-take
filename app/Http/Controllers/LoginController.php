<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('login', [
            'title' => 'Login'
        ]);
    }

    public function authentication(Request $request) {
        $validatedUser = $request->validate([
            'email' => ['required', 'email:strict'],
            'password' => ['required']
        ]);
        
        if (Auth::attempt($validatedUser)) {
            $request->session()->regenerate();
            if (auth()->user()->role_id === 0) {
                return redirect()->intended('/user');
            }
            if (auth()->user()->role_id === 1) {
                return redirect()->intended('/admin');
            }
        }

        return back()->with('loginError', 'Login Failed! Please recheck your input.');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
