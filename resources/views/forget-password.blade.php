<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/forget-password.css') }}">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />   --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" /> 
    <title>Document</title>
</head>
<body>
    <div class="icon-back">
        
        <i class="fa fa-chevron-left fa-lg">  Back</i>
    </div>
    <div class="body-container">
        <div class="inside-forget-password-box">
            <form action="" method="post">
                <div class="email">
                    <label class="email-text" for="email">Email</label>
                    <input type="text" class="email-box" placeholder="Masukan Email Terdaftar....." name="email" value="">
                    <span class="text-danger">@error('email'){{$message}}@enderror</span>
                </div>
                <button class="button-send" type="submit">Send</button>
            </form>
        </div>
        <div class="forget-password-container"></div>
        <div class="forget-password-text">Forget Password</div>
    </div>
</body>
</html>