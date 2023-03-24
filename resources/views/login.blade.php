<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bake & Take | {{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/loginstyle.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
</head>
<body>
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
                    <div class="icon"><i class="fa fa-user-circle fa-lg" ></i></div>
                    <input class="text" type="email" name="email" placeholder="Email" autofocus value="{{ old('email') }}">
                </div>
                @error('email')
                    <div class="invalid-msg">{{ $message }}</div>
                @enderror
                <div class="box">
                    <div class="icon"><i class="fa fa-key fa-lg" ></i></div>
                    <input class="text" type="password" name="password" placeholder="Password">
                </div>
                @error('password')
                    <div class="invalid-msg">{{ $message }}</div>
                @enderror
                <div class="remember-forget">
                    <div class="remember-box">
                        <input type="checkbox" id="remember" name="remember" value="remember">
                        <label for="remember" class="remember-text">Remember Me</label>
                    </div>
                    <a href="/login/forget-password" class="forget-password">Forget Password?</a>
                </div>
                
                <div class="box"><button type="submit" class="button-login">LOGIN</button></div>
            </form>
            <div style="height: 10px"></div>
            <div class="box"><a href="/register" class="button-register">REGISTER</a></div>
        </div>
    </div>
    <script src="{{ asset('jquery.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>