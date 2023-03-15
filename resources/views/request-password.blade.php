<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/request-password.css') }}">
    <title>Request Send</title>
</head>
<body>
    <div class="container">
        <div class="req-text">Request Reset Password</div>
        <img src="{{ asset('assets/Icon/mail-out(2).jpg') }}" alt="Mail-Out" class="img">
        <div class="text"> Kami telah mengirimkan link reset password ke email anda. Silahkan cek email anda untuk mereset password anda</div>
        <form action="" method="POST">
            <button type="submit" class="button">Tutup</button>
        </form>
    </div>
</body>
</html>