<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\auth\LoginRequest;
use App\Http\Requests\auth\ResetPasswordRequest;
use App\Http\Requests\auth\ForgotPasswordRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
   public function index() {
      return view('guest.login', [
         'title' => 'Login'
      ]);
   }

   public function login(LoginRequest $request) {
      $validatedUser = $request->validated();
      
      if (Auth::attempt($validatedUser)) {
         $request->session()->regenerate();
         if (auth()->user()->role_id === 0) {
            return redirect()->intended('/user');
         }else if (auth()->user()->role_id === 1) {
            return redirect()->intended('/admin');
         }
      }

      return back()->with('loginError', 'Login Failed! Please check your input.');
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

   public function forgotPassword(ForgotPasswordRequest $request) {
      $forgotPassword = $request->validated();

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

   public function resetPassword(ResetPasswordRequest $request, $id) {
      $resetPassword = $request->validated();

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