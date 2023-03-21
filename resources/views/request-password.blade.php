<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/request-password.css') }}">
    <title>Bake & Take | {{ $title }}</title>
</head>
<body>
=======
@extends('layouts.main')

@section('container')
>>>>>>> 241685df386d3a5356d33137f16384036be6aea0
    <div class="container">
        <div class="req-text">Request Reset Password</div>
        <img src="{{ asset('assets/Icon/mail-out(2).jpg') }}" alt="Mail-Out" class="img">
        <div class="text"> Kami telah mengirimkan link reset password ke email anda. Silahkan cek email anda untuk mereset password anda</div>
        
            <button type="submit" class="button"><a href="/reset-password" style="text-decoration: none">Tutup</a></button>
        
    </div>
@endsection