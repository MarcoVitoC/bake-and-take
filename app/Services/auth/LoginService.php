<?php

namespace App\Services\auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginService {
   public function login($request) {
      $validatedUser = $request->validated();

      if (Auth::attempt($validatedUser)) {
         $request->session()->regenerate();
         return true;
      }

      return false;
   }

   public function logout($request) {
      Auth::logout();
      $request->session()->invalidate();
      $request->session()->regenerateToken();
      return redirect('/');
   }

   public function forgotPassword($request) {
      $forgotPassword = $request->validated();

      $user = User::where('email' , '=', $forgotPassword['email'])->first();

      return $user ?? null;
   }

   public function resetPassword($request, $id) {
      $resetPassword = $request->validated();

      $resetPassword['new_password'] = Hash::make($resetPassword['new_password']);

      $user = User::find($id);
      $user->update(['password' => $resetPassword['new_password']]);
   }
}