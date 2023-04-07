@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="login-box">LOGIN</div>
        <div class="inside-container">
            @if (session()->has('success'))
                <div class="success-msg">
                    <h3>{{ session('success') }}</h3>
                    <button type="button" id="dismiss-btn">&#10005;</button>
                </div>
            @elseif (session()->has('loginError'))
                <div class="error-msg">
                    <h3>{{ session('loginError') }}</h3>
                    <button type="button" id="dismiss-btn">&#10005;</button>
                </div>
            @endif
            <form action="/login" method="post">
                @csrf
                <div class="box">
                    <div class="login-icon"><i class="fa fa-user-circle fa-lg" ></i></div>
                    <input class="text" type="email" name="email" placeholder="Email" autofocus value="{{ old('email') }}">
                </div>
                @error('email')
                    <div class="invalid-msg">{{ $message }}</div>
                @enderror
                <div class="box">
                    <div class="login-icon"><i class="fa fa-key fa-lg" ></i></div>
                    <input class="text" type="password" name="password" placeholder="Password">
                </div>
                @error('password')
                    <div class="invalid-msg">{{ $message }}</div>
                @enderror
                <div class="remember-forget">
                    <div class="remember-box">
                        <input type="hidden" id="remember" name="remember" value="remember">
                        <label for="remember" class="remember-text"></label>
                    </div>
                    <a href="/login/forgot-password" class="forget-password">Forgot Password?</a>
                </div>
                
                <div class="box"><button type="submit" class="button-login">LOGIN</button></div>
            </form>
            <div style="height: 10px"></div>
            <div class="box"><a href="/register" class="button-register">REGISTER</a></div>
        </div>
    </div>
@endsection