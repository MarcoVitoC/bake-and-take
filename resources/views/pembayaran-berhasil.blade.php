<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berhasil</title>
    <link rel="stylesheet" href="{{ asset('css/pembayaran-berhasil.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" /> 
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&family=Lora:wght@500&display=swap" rel="stylesheet">
</head>
<body>


    <div class="container">
        <div class="inner-container">
            <div class="text">Pembayaran Telah Berhasil</div>
            <img src="{{ asset('assets/Icon/Check.jpg') }}" alt="check" class="img">
        </div>

        <div class="tutup-container">
            <a href="/" class="tutup">TUTUP</a> 
            {{-- nanti di balikin ke tampilan user aja --}}
        </div>
    </div>

    
</body>
</html>