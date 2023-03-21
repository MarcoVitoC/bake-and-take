<<<<<<< HEAD:resources/views/berhasil.blade.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bake & Take | {{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/ubah-password.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" /> 
</head>
<body>

=======
@extends('layouts.main')
>>>>>>> 241685df386d3a5356d33137f16384036be6aea0:resources/views/ubah-password.blade.php

@section('container')
    <div class="container">
        <div class="text">{{ $ubah_password }}</div>
        
        <img src="{{ asset('assets/Icon/Check.jpg') }}" alt="check" class="img">
        
        <form action="" method="POST">
                <button type="submit" class="button">Tutup</button>
        </form>
    </div> 
@endsection