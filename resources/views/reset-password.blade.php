<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/reset-password.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" /> 
    
</head>
<body>
    <div class="icon-back">
        <i class="fa fa-chevron-left fa-lg">  Back</i>
    </div>
    <form action="" method="post">
        <div class="body-container">
            <div class="reset-container"></div>
            <div class="reset-box"></div>
            <div class="reset-text">Reset Password</div>
            <div class="inside-reset-box">
                

                <div class="form-group">
                    <div class="password-icon-box">
                        <div class="password-icon"><i class="fa fa-key fa-lg" ></i></div>
                    </div>
                    <div class="password">
                        <input type="text" class="password-box" placeholder="Password" name="password" value="">
                        <span class="text-danger">@error('password'){{$message}}@enderror</span>
                    </div>
                </div>
                
                
                

                <div class="form-group">
                    <div class="confirm-password-icon-box">
                        <div class="confirm-password-icon"><i class="fa fa-key fa-lg" ></i></div>
                    </div>
                    <div class="password">
                            <input type="confirm-password" class="confirm-password-box" placeholder="Confirm Password" name="email" value="">
                            <span class="text-danger">@error('confirm-password'){{$message}}@enderror</span>
                    </div>
                </div>
                <button class="reset-button" type="submit">RESET</button>
                
            </div>
        </div>
        
    </form>
</body>
</html>


