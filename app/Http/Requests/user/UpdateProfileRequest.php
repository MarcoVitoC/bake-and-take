<?php

namespace App\Http\Requests\user;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
         'email' => ['required', 'email:strict'],
         'phone_number' => ['required', 'digits:12', 'numeric'],
         'dob' => ['required'],
         'address' => ['required', 'min:5', 'max:255'],
         'confirm_password' => ['required']
      ];
   }
}
