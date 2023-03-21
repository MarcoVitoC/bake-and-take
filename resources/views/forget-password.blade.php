@extends('layouts.main')

@section('container')
    <div class="icon-back">
        <i class="fa fa-chevron-left fa-lg">  Back</i>
    </div>
    <div class="body-container">
        <div class="inside-forget-password-box">

            <form action="" method="post">

                <div class="inside-container">
                    <label for="name" class="name">Name: <span class="req">*</span></label>
                    <input class="text" name="name" type="text" placeholder="Masukan Email Terdaftar...." required>
                    
                    
                    <div class="box"><input type="submit" value="Send" class="button-send"></div>
                </div>
            </form>

        </div>
    </div>
@endsection
