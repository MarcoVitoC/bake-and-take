@extends('layouts.fav-notif')

@section('container')
    <div class="fav-main-container">
        <div class="fav-top-container">
            <img src="{{ asset('assets/Icon/open-mail.jpg') }}" alt="Gambar Mail" width="16px" height="16px">
            <img src="{{ asset('assets/Icon/heart.jpg') }}" alt="Gambar Hati" width="80px" height="68px">
            <div class="fav-fav-text">Favorite</div>
        </div>
        <div class="fav-inner-container">
            <div class="display-fav-container">
                <img src="{{ asset('assets/Transaction/gambar_kue.jpg') }}" alt="Gambar Kue" width="206px" height="203px">
                <div class="fav-detail-container">
                    <div class="fav-nama-kue">Uni Cake</div>
                    <div class="fav-harga">Rp130.000</div>
                    <div class="fav-lihat-toko"><a href="">Lihat Toko</a></div>
                </div>
                <div class="delete-fav">
                    <img src="{{ asset('assets/Icon/delete.jpg') }}" alt="Gambar Kue" width="22px" height="24px" class="delete-fav-img">
                </div>
            </div>
        </div>
    </div>
@endsection