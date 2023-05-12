<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\auth\RegisterRequest;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
   public function index() {
      return view('guest.register', [
         'title' => 'Register'
      ]);
   }

   public function register(RegisterRequest $request) {
      $newUser = $request->validated();

      $newUser['password'] = Hash::make($newUser['password']);
      User::create($newUser);

      return redirect('/login')->with('success', 'Registration succeed. Please login!');
   }
}