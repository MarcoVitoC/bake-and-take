<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\auth\LoginRequest;
use App\Http\Requests\auth\ResetPasswordRequest;
use App\Http\Requests\auth\ForgotPasswordRequest;
use App\Services\auth\LoginService;

class LoginController extends Controller
{
   private $loginService;

   public function __construct() {
      $this->loginService = new LoginService();
   }

   public function showLoginPage() {
      return view('guest.login', [
         'title' => 'Login'
      ]);
   }

   public function login(LoginRequest $request) {
      if ($this->loginService->login($request)) {
         return (auth()->user()->role_id === 0) ? redirect()->intended('/user') : redirect()->intended('/admin');
      }

      return back()->with('loginError', 'Login Failed! Please check your input.');
   }

   public function logout(Request $request) {
      return $this->loginService->logout($request);
   }

   public function showForgotPassword() {
      return view('guest.forgot-password', [
         'title' => 'Forgot Password'
      ]);
   }

   public function forgotPassword(ForgotPasswordRequest $request) {
      $user = $this->loginService->forgotPassword($request);
      if (isset($user)) {
         return to_route('resetPassword', ['id' => $user->id]);
      }

      return back()->withErrors([
         'email' => ['The provided email does not match our records.']
      ]);
   }

   public function showResetPassword($id) {
      $user = User::find($id);
      
      return view('guest.reset-password', [
         'title' => 'Reset Password',
         'user' => $user
      ]);
   }

   public function resetPassword(ResetPasswordRequest $request, $id) {
      try {
         $this->loginService->resetPassword($request, $id);
         return to_route('resetPasswordSuccess');
      } catch (Exception $e) {
         return dd($e->getMessage());
      }
   }

   public function resetPasswordSuccess() {
      return view('guest.reset-password-success', [
         'title' => 'Succeed'
      ]);
   }
}