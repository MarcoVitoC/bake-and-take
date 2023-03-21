@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="text">{{ $ubah_password }}</div>
        
        <img src="{{ asset('assets/Icon/Check.jpg') }}" alt="check" class="img">
        
        <form action="" method="POST">
                <button type="submit" class="button">Tutup</button>
        </form>
    </div> 
@endsection