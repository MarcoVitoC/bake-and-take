@extends('layouts.user')

@section('container')
    <div class="checker-container">

        <p class="checker-text">Are you Sure to <span style="color:#FF0000;">Delete</span> <span style="color: #F364FF;">Cheese Fiesta</span> From Your <span style="color: #F364FF;">list</span>?</p>
        <div class="button-container-checker">
            <form action="" method="POST">
                <button type="submit" class="button-yes">Yes</button>
            </form>
            <form action="" method="POST">
                <button type="submit" class="button-no">No</button>
            </form>
        </div>
    </div>
    @endsection