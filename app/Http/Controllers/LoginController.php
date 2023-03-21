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
            'email' => ['required', 'email:dns'],
            'password' => ['required']
        ]);

        if (Auth::attempt($validatedUser)) {
            $request->session()->regenerate();
            return redirect()->intended('/user');
        }

        return back()->with('loginError', 'Login Failed!');
    }
}
