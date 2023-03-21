@extends('layouts.main')

@section('container')
    
    <div class="body-container">
        <div class="forget-box">Forget Password</div>
        <div class="inside-forget-password-box">

            <form action="" method="post">

                <div class="inside-container-forget-box">
                    <label for="name" class="name">Email: <span class="req">*</span></label>
                    <input class="text-forget-box" name="name" type="text" placeholder="Masukan Email Terdaftar...." required>

                    <div class="box"><input type="submit" value="Send" class="button-send-box"></div>
                </div>
            </form>

        </div>
    </div>
@endsection
