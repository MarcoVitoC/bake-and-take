@extends('layouts.main')

@section('container')
  <div class="update-box">Update Profile</div>
  <div class="update-form">
    <form action="/user/profile/update-profile" method="post">
      @method('put')
      @csrf
      <div class="form-bar">
        <input type="text" name="fullname" placeholder="Full Name" value="{{ old('fullname', auth()->user()->fullname) }}">
        @error('fullname')
          <div class="invalid-msg">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-bar">
        <input type="email" name="email" placeholder="Email" value="{{ old('email', auth()->user()->email) }}">
        @error('email')
          <div class="invalid-msg">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-bar">
        <input type="text" name="phone_number" placeholder="Phone Number" value="{{ old('phone_number', auth()->user()->phone_number) }}">
        @error('phone_number')
          <div class="invalid-msg">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-bar">
        <input type="text" name="dob" placeholder="Date of Birth" onfocus="this.type='date'" onblur="this.type='text'" value="{{ old('dob', auth()->user()->dob) }}">
        @error('dob')
          <div class="invalid-msg">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-bar">
        <input type="text" name="address" placeholder="Address" value="{{ old('address', auth()->user()->address) }}">
        @error('address')
          <div class="invalid-msg">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-bar">
        <input type="password" name="confirm_password" placeholder="Confirm Password">
        @error('confirm_password')
          <div class="invalid-msg">{{ $message }}</div>
        @enderror
      </div>
      <div class="update-profile-btn">
        <button type="submit">Update</button>
      </div>
    </form>
  </div>
@endsection