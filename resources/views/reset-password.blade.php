@extends('layouts.main')

@section('container')
    <div class="icon-back">
        <i class="fa fa-chevron-left fa-lg">  Back</i>
    </div>
    <form action="" method="post">
        <div class="body-container">
            <div class="reset-container"></div>
            <div class="reset-box"></div>
            <div class="reset-text">Reset Password</div>
            <div class="inside-reset-box">
                <div class="form-group">
                    <div class="password-icon-box">
                        <div class="password-icon"><i class="fa fa-key fa-lg" ></i></div>
                    </div>
                    <div class="password">
                        <input type="text" class="password-box" placeholder="Password" name="password" value="">
                        <span class="text-danger">@error('password'){{$message}}@enderror</span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="confirm-password-icon-box">
                        <div class="confirm-password-icon"><i class="fa fa-key fa-lg" ></i></div>
                    </div>
                    <div class="password">
                            <input type="confirm-password" class="confirm-password-box" placeholder="Confirm Password" name="email" value="">
                            <span class="text-danger">@error('confirm-password'){{$message}}@enderror</span>
                    </div>
                </div>
                <button class="reset-button" type="submit">RESET</button>
            </div>
        </div>
    </form>
@endsection


