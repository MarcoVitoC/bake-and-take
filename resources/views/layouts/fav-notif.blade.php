<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"/>
<<<<<<< HEAD:resources/views/layouts/transaction.blade.php
  <link rel="stylesheet" href="{{ asset('/css/user-navbar.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/transaction.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/footer.css') }}">
  <link rel="stylesheet" href="{{ asset('css/halaman-utama.css') }}">
=======
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('/css/navbar.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/fav.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/notif.css') }}">
>>>>>>> 9f1c0a7cf993db72c8730f15b97ae81506cf6795:resources/views/layouts/fav-notif.blade.php
  <title>Bake & Take | {{ $title }}</title>
</head>
<body>
  @include('components.user-navbar')
  <div>
    @yield('container')
  </div>
</body>
<script src="{{ asset('jquery.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/halaman-utama.js') }}"></script>
</html>