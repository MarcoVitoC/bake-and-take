<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('/css/navbar.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/guest.css') }}">
  <title>Bake & Take | {{ $title }}</title>
</head>
<body>
  @include('components.__navbar')
  <div>
    @yield('container')
  </div>
</body>
<script src="{{ asset('jquery.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
</html>