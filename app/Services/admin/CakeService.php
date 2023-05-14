<?php

namespace App\Services\admin;

use App\Models\Cake;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CakeService {
   public function createCake($request) {
      $newCake = $request->validated();
      
      $newCake["cake_photo"] = $request->file('cake_photo')->store('uploaded-cake-photo');
      $newCake["excerpt"] = Str::limit(strip_tags($request->cake_description, 20));

      $cake = Cake::create($newCake);
      return $cake;
   }

   public function getCakeDetailById($id) {
      $cake = Cake::with('category')->where('cakes.id', '=', $id)->first();
      return $cake;
   }

   public function getCakeForEditById($id) {
      $cake = Cake::where('cakes.id', '=', $id)->first();
      return $cake;
   }

   public function updateCake($request, $cake) {
      $updateCake = $request->validated();
      
      $updateCake["excerpt"] = Str::limit(strip_tags($request->cake_description, 20));

      if ($request->file('cake_photo')) {
         $updateCake["cake_photo"] = $request->file('cake_photo')->store('uploaded-cake-photo');
         Storage::delete($request->oldCakeImage);
      }

      $cake->update($updateCake);
   }

   public function findCakeToDelete($id) {
      $cake = Cake::where('cakes.id', '=', $id)->first();
      return $cake;
   }

   public function deleteCake($cake) {
      Storage::delete($cake->cake_photo);
      $cake->delete();
   }
}