<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('register', [
            'title' => 'Register'
        ]);
    }

    public function register(Request $request) {
        $newUser = $request->validate([
            'fullname' => ['required', 'min:3', 'max:255', 'alpha'],
            'email' => ['required', 'email:strict', 'unique:users'],
            'password' => ['required', 'min:5', 'max:255'],
            'confirmPassword' => ['required', 'same:password'],
            'gender' => ['required'],
            'dob' => ['required'],
            'address' => ['required', 'min:5', 'max:255'],
            'phoneNumber' => ['required', 'min:12', 'unique:users', 'numeric'],
            'terms-conditions' => ['required']
        ]);

        // $newUser['id'] = Str::uuid();
        $newUser['password'] = Hash::make($newUser['password']);
        User::create($newUser);

        return redirect('/login')->with('success', 'Registration succeed. Please login!');
    }
}