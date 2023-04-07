@extends('layouts.succeed')

@section('container')
    <div class="inner-container">
        <div class="text">Payment Succeed!</div>
        <img src="{{ asset('assets/Icon/Check.jpg') }}" alt="check" class="img">
    </div>
    <div class="tutup-container">
        <a href="/user" class="tutup">BACK</a> 
    </div>
@endsection