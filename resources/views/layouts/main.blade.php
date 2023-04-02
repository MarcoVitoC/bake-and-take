<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
  {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"/> --}}
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500;700&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="{{ asset('/css/navbar.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/guest.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/footer.css') }}">
  <link rel="stylesheet" href="{{ asset('css/loginstyle.css') }}">
  <link rel="stylesheet" href="{{ asset('css/user.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/product-detail.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/favorite.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/transaction.css') }}">
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
  <link rel="stylesheet" href="{{ asset('css/add-cake.css') }}">
  <link rel="stylesheet" href="{{ asset('css/edit-cake.css') }}">
  <link rel="stylesheet" href="{{ asset('css/update-cake.css') }}">
  <link rel="stylesheet" href="{{ asset('css/delete-cake.css') }}">
  <link rel="stylesheet" href="{{ asset('css/forget-password.css') }}">
  <link rel="stylesheet" href="{{ asset('css/request-password.css') }}">
  <link rel="stylesheet" href="{{ asset('css/reset-password.css') }}">
  <link rel="stylesheet" href="{{ asset('css/ubah-password.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/footer.css') }}">
  <title>Bake & Take | {{ $title }}</title>
</head>
<body>
  <div>
    @yield('container')
  </div>
</body>
<script src="{{ asset('jquery.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
</html>