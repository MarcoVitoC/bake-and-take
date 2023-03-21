@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="text">Password berhasil di ubah</div>
        <img src="{{ asset('assets/Icon/Check.jpg') }}" alt="check" class="img">
        <form action="" method="POST">
                <button type="submit" class="button">Tutup</button>
        </form>
    </div> 
@endsection