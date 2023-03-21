@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="req-text">Request Reset Password</div>
        <img src="{{ asset('assets/Icon/mail-out(2).jpg') }}" alt="Mail-Out" class="img">
        <div class="text"> Kami telah mengirimkan link reset password ke email anda. Silahkan cek email anda untuk mereset password anda</div>
        <form action="" method="POST">
            <button type="submit" class="button">Tutup</button>
        </form>
    </div>
@endsection