<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bake & Take | {{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/forget-password.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" /> 
    
</head>
<body>
    <div class="container">
        <div class="forget-box">Forget Password</div>
            <form action="" method="post">

                <div class="inside-container">
                    <label for="name" class="name">Name: <span class="req">*</span></label>
                    <input class="text" name="name" type="text" placeholder="Masukan Email Terdaftar...." required>
                    
                    
                    <div class="box"><input type="submit" value="Send" class="button-send"></div>
                </div>
            </form>

        </div>
    </div>
        
    
</body>
</html>


