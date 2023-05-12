@extends('layouts.main')

@section('container')
  <div class="update-box">Change Password</div>
  <div class="update-form">
    <form action="/user/profile/change-password" method="post">
      @method('put')
      @csrf
      <div class="form-bar">
         <input type="password" name="old_password" placeholder="Old Password">
         @error('old_password')
           <div class="invalid-msg">{{ $message }}</div>
         @enderror
      </div>
      <div class="form-bar">
        <input type="password" name="new_password" placeholder="New Password">
        @error('new_password')
          <div class="invalid-msg">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-bar">
        <input type="password" name="confirm_new_password" placeholder="Confirm New Password">
        @error('confirm_new_password')
          <div class="invalid-msg">{{ $message }}</div>
        @enderror
      </div>
      <div class="change-password-btn">
        <button type="submit">Update</button>
      </div>
    </form>
  </div>
@endsection