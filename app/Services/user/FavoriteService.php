<?php

namespace App\Services\user;

use App\Models\Cake;
use App\Models\Favorite;

class FavoriteService {
   public function showFavorites() {
      $favorites = Favorite::with('cake')
                  ->where('user_id', '=', auth()->user()->id)
                  ->has('cake')
                  ->get();

      return $favorites;
   }

   public function addFavorite($id) {
      $cake = Cake::find($id);

      Favorite::firstOrCreate([
         'cake_id' => $cake->id,
         'user_id' => auth()->user()->id
      ]);
   }

   public function removeFavoriteFromProductDetail($id) {
      $favorite = Favorite::where('cake_id', '=', $id)
                  ->where('user_id', '=', auth()->user()->id)
                  ->first();
      
      $favorite->delete();
   }

   public function removeFavoriteFromFavoritePage($request) {
      $favorite = Favorite::where('id', '=', $request->favoriteId)
                  ->where('user_id', '=', auth()->user()->id)
                  ->first();

      $favorite->delete();
   }
}