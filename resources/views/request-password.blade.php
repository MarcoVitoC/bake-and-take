@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="req-text">Request Reset Password</div>
        <img src="{{ asset('assets/Icon/mail-out(2).jpg') }}" alt="Mail-Out" class="img">
        <div class="text"> Kami telah mengirimkan link reset password ke email anda. Silahkan cek email anda untuk mereset password anda</div>
        
            <button type="submit" class="button"><a href="/reset-password" style="text-decoration: none">Tutup</a></button>
        
    </div>
@endsection