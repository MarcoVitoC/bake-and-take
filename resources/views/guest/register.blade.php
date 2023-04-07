@extends('layouts.main')

@section('container')
  <div class="register-box">REGISTER</div>
  <div class="register-form">
    <form action="/register" method="post">
      @csrf
      <div class="form-bar">
        <input type="text" name="fullname" placeholder="Full Name" value="{{ old('fullname') }}">
        @error('fullname')
          <div class="invalid-msg">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-bar">
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
        @error('email')
          <div class="invalid-msg">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-bar">
        <input type="password" name="password" placeholder="Password">
        @error('password')
          <div class="invalid-msg">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-bar">
        <input type="password" name="confirm_password" placeholder="Confirm Password">
        @error('confirm_password')
          <div class="invalid-msg">{{ $message }}</div>
        @enderror
      </div>
      <div class="register-gender">
        <div class="male">
          <input type="radio" id="male" name="gender" value="Male" checked>
          <label for="male">Male</label>
        </div>
        <div class="female">
          <input type="radio" id="female" name="gender" value="Female">
          <label for="female">Female</label>
        </div>
      </div>
      <div class="form-bar">
        <input type="text" name="dob" placeholder="Date of Birth" onfocus="this.type='date'" onblur="this.type='text'" value="{{ old('dob') }}">
        @error('dob')
          <div class="invalid-msg">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-bar">
        <input type="text" name="address" placeholder="Address" value="{{ old('address') }}">
        @error('address')
          <div class="invalid-msg">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-bar">
        <input type="text" name="phone_number" placeholder="Phone Number" value="{{ old('phone_number') }}">
        @error('phone_number')
          <div class="invalid-msg">{{ $message }}</div>
        @enderror
      </div>
      <div class="terms-conditions">
        <input type="checkbox" id="terms-conditions" name="terms-conditions">
        <label for="terms-conditions">I agree with terms and conditions</label>
        @error('terms-conditions')
          <div class="invalid-msg">{{ $message }}</div>
        @enderror
      </div>
      <div class="register-btn">
        <button type="submit">REGISTER</button>
      </div>
    </form>
  </div>
@endsection