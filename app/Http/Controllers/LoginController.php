<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
   public function index() {
      return view('guest.login', [
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

   public function showForgotPassword() {
      return view('guest.forgot-password', [
         'title' => 'Forgot Password'
      ]);
   }

   public function forgotPassword(Request $request) {
      $forgotPassword = $request->validate([
         'email' => ['required', 'email:strict']
      ]);

      $user = User::where('email' , '=', $forgotPassword['email'])->first();
      
      if ($user != null) {
         return redirect()->route('resetPassword', ['id' => $user->id]);
      }else {
         return back()->withErrors([
               'email' => ['The provided email does not match our records.']
         ]);
      }
   }

   public function showResetPassword($id) {
      $user = User::find($id);
      
      return view('guest.reset-password', [
         'title' => 'Reset Password',
         'user' => $user
      ]);
   }

   public function resetPassword(Request $request, $id) {
      $resetPassword = $request->validate([
         'new_password' => ['required', 'min:3', 'max:255'],
         'confirm_new_password' => ['required', 'same:new_password']
      ]);

      $resetPassword['new_password'] = Hash::make($resetPassword['new_password']);

      $user = User::find($id);
      $user->update(['password' => $resetPassword['new_password']]);

      return redirect('/reset-password-success');
   }

   public function resetPasswordSuccess() {
      return view('guest.reset-password-success', [
         'title' => 'Succeed'
      ]);
   }
}