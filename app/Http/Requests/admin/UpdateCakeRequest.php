<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCakeRequest extends FormRequest
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
         'cake_name' => ['required', 'min:5', 'max:255'],
         'cake_price' => ['required', 'numeric'],
         'cake_ingredients' => ['required', 'min:5', 'max:255'],
         'cake_description' => ['required', 'min:5', 'max:255'],
         'category_id' => ['required'],
         'cake_photo' => ['mimes:jpeg, png, jpg', 'file', 'max:1024']
      ];
   }
}
