<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('register', [
            'title' => 'Register'
        ]);
    }

    public function register(Request $request) {
        $newUser = $request()->validate([
            'fullname' => ['required', 'min:3', 'max:255', 'alpha'],
            'dob' => ['required', 'date'],
            'phoneNumber' => ['required', 'min:12'],
            'gender' => ['required', 'min:4', 'alpha'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:3', 'max:255'],
            'address' => ['required', 'min:5', 'max:255']
        ]);

        $newUser['password'] = Hash::make($newUser['password']);
        User::create($newUser);

        // tambahin if-else di login page utk flash message
        return redirect('/login')->with('success', 'Registration succeed! Please login');
    }
}
