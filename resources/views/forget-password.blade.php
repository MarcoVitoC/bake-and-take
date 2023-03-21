@extends('layouts.main')

@section('container')
    <div class="icon-back">
        <i class="fa fa-chevron-left fa-lg">  Back</i>
    </div>
    <div class="body-container">
        <div class="inside-forget-password-box">
            <form action="" method="post">
                <div class="email">
                    <label class="email-text" for="email">Email</label>
                    <input type="text" class="email-box" placeholder="Masukan Email Terdaftar....." name="email" value="">
                    <span class="text-danger">@error('email'){{$message}}@enderror</span>
                </div>
                <button class="button-send" type="submit">Send</button>
            </form>
        </div>
        <div class="forget-password-container"></div>
        <div class="forget-password-text">Forget Password</div>
    </div>
@endsection