<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/loginstyle.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" /> 
    
</head>
<body>
    <div class="icon-back">
        <i class="fa fa-chevron-left fa-lg">  Back</i>
    </div>
    <form action="" method="post">
        <div class="body-container">
            <div class="login-container"></div>
            <div class="login-box"></div>
            <div class="login-text">LOGIN</div>
            <div class="inside-login-box">
                

                <div class="form-group">
                    <div class="email-icon-box">
                        <div class="email-icon"><i class="fa fa-user-circle fa-lg" ></i></div>
                    </div>
                    <div class="email">
                        <input type="text" class="email-box" placeholder="Email/Username" name="email" value="">
                        <span class="text-danger">@error('email'){{$message}}@enderror</span>
                    </div>
                </div>
                
                <div class="remember-box">
                    <input type="checkbox" id="remember" name="remember" value="remember">
                    <label for="remember">Remember me</label>
                </div>
                <div class="forget-password"><a href="">Forget Password?</a></div>

                <div class="form-group">
                    <div class="password-icon-box">
                        <div class="password-icon"><i class="fa fa-key fa-lg" ></i></div>
                    </div>
                    <div class="password">
                            <input type="password" class="password-box" placeholder="Password" name="email" value="">
                            <span class="text-danger">@error('email'){{$message}}@enderror</span>
                    </div>
                </div>
                <button class="login-button" type="submit">LOGIN</button>
                <button class="register-button" type="submit">REGISTER</button>
            </div>
        </div>
        
    </form>
</body>
</html>


