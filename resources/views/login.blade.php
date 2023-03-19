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
    <div class="container">
        <div class="login-box">LOGIN</div>
        <form action="" method="post">

            <div class="inside-container">
                <div class="box">
                <div class="icon"><i class="fa fa-user-circle fa-lg" ></i></div>
                <input class="text" type="text" placeholder="Email/Username" >
                
            </div>
            <div style="height: 10px;"></div>
            <div class="box">
                <div class="icon"><i class="fa fa-key fa-lg" ></i></div>
                <input class="text" type="text" placeholder="Password" >
            </div>
            <div class="remember-forget">    
                <div class="remember-box">
                    <input type="checkbox" id="remember" name="remember" value="remember">
                    <label for="remember">Remember me</label>
                </div>
                <a href="/login/forget-password" style="text-decoration: none; color: #1E9CD2">Forget Password?</a>
            </div>
            
            <div class="box"><input type="submit" value="LOGIN" class="button-login"></div>
        </form>
            <div style="height: 10px"></div>
            <div class="box"><a href="" class="button-register" style="text-decoration: none">REGISTER</a></div>
        </div>
    </div>
        
    
</body>
</html>


