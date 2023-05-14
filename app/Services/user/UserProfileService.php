<?php

namespace App\Services\user;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserProfileService {
   public function updateProfile($request) {
      $updateUser = $request->validated();

      if (!Hash::check($request->confirm_password, $request->user()->password)) {
         return back()->withErrors([
            'confirm_password' => ['The provided password does not match our records.']
         ]);
      }

      $userId = auth()->user()->id;
      $user = User::find($userId);
      $user->update($updateUser);
   }

   public function changePassword($request) {
      $changePassword = $request->validated();

      if (!Hash::check($changePassword['old_password'], auth()->user()->password)) {
         return false;
      }

      $changePassword['new_password'] = Hash::make($changePassword['new_password']);

      $userId = auth()->user()->id;
      $user = User::find($userId);
      $user->update(['password' => $changePassword['new_password']]);
      return true;
   }
}