@extends('layouts.main')

@section('container')
  <div class="reset-password-box">Change Password</div>
  <div class="reset-password-form">
    <form action="/reset-password/{{ $user->id }}" method="post">
      @method('put')
      @csrf
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
      <div class="reset-password-btn">
        <button type="submit">Reset</button>
      </div>
    </form>
  </div>
@endsection