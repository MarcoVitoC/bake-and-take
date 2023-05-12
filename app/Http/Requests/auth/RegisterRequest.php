<?php

namespace App\Http\Requests\auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
   /**
    * Determine if the user is authorized to make this request.
    *
    * @return bool
    */
   public function authorize()
   {
      return true;
   }

   /**
    * Get the validation rules that apply to the request.
    *
    * @return array<string, mixed>
    */
   public function rules()
   {
      return [
         'fullname' => ['required', 'min:3', 'max:255'],
         'email' => ['required', 'email:strict', 'unique:users'],
         'password' => ['required', 'min:5', 'max:255'],
         'confirm_password' => ['required', 'same:password'],
         'gender' => ['required'],
         'dob' => ['required'],
         'address' => ['required', 'min:5', 'max:255'],
         'phone_number' => ['required', 'digits:12', 'unique:users', 'numeric'],
         'terms-conditions' => ['required']
      ];
   }
}
