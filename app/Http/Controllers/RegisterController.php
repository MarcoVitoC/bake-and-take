<?php

namespace App\Http\Controllers;

use Exception;
use App\Http\Requests\auth\RegisterRequest;
use App\Services\auth\RegisterService;

class RegisterController extends Controller
{
   private $registerService;

   public function __construct() {
      $this->registerService = new RegisterService();
   }

   public function showRegisterPage() {
      return view('guest.register', [
         'title' => 'Register'
      ]);
   }

   public function register(RegisterRequest $request) {
      try {
         $this->registerService->registerUser($request);
         return redirect('/login')->with('success', 'Registration succeed. Please login!');
      } catch (Exception $e) {
         return dd($e->getMessage());
      }
   }
}