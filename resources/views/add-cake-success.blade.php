@extends('layouts.succeed')

@section('container')
    <div class="inner-container">
        <div class="text">Cake Added Successfully!</div>
        <img src="{{ asset('assets/Icon/Check.jpg') }}" alt="check" class="img">
    </div>
    <div class="tutup-container">
        <a href="/admin" class="tutup">BACK</a> 
    </div>
@endsection