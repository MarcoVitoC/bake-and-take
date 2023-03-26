<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"/>
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('/css/navbar.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/admin-products.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/footer.css') }}">
  <title>Bake & Take | {{ $title }}</title>
</head>
<body>
  @include('components.admin-navbar')
  <div>
    @yield('container')
  </div>
  @include('components.footer')
</body>
<script src="{{ asset('jquery.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
</html>