@extends('layouts.main')

@section('container')
<div class="forgot-password-box">Forgot Password</div>
<div class="forgot-password-form">
    <form action="/login/forgot-password" method="post">
        @csrf
        <div class="forgot-password-form-bar">
            <label for="email">Email <span style="color: red">*</span></label><br>
            <input type="email" name="email" placeholder="Insert Your Email..." value="{{ old('email') }}">
            @error('email')
              <div class="invalid-msg">{{ $message }}</div>
            @enderror
          </div>
          <div class="forgot-password-btn">
            <button type="submit">Submit</button>
          </div>
    </form>
</div>
@endsection
