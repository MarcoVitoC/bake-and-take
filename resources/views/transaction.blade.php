@extends('layouts.fav-notif')

@section('container')
    <div class="notif-main-container">
        <div class="notif-top-container">
            <img src="{{ asset('assets/Icon/transaction.png') }}" alt="Gambar Transaksi" width="88px" height="78px">
            <div class="notif-transaction-text">Transaction</div>
        </div>
        <div class="notif-inner-container">
            <div class="display-transaction-container">
                <div class="left-transaction-container">
                    <img src="{{ asset('assets/Transaction/gambar_kue.jpg') }}" alt="Gambar Kue" width="206px" height="203px">
                    <div class="transaction-detail-container">
                        <div class="notif-main-text">Kue Terbayar</div>
                        <div class="notif-sub-text">Kue <b>Unicake</b> Telah Dibayar</div>
                        <div class="notif-date">08-03-2023 19:59 ▼</div>
                    </div>
                </div>
            </div>

            <div class="display-transaction-container">
                <div class="left-transaction-container">
                    <img src="{{ asset('assets/Transaction/gambar_kue.jpg') }}" alt="Gambar Kue" width="206px" height="203px">
                    <div class="transaction-detail-container">
                        <div class="notif-main-text">Kue Menunggu Untuk Dibayar</div>
                        <div class="notif-sub-text">Kue <b>Unicake</b> Menunggu Untuk Dibayar</div>
                        <div class="notif-date">08-03-2023 19:59 ▼</div>
                    </div>
                </div>
                <div class="notif-button"><a href="">Klik Disini Untuk Konfirmasi Pembayaran!</a></div>
            </div>

            <div class="display-transaction-container">
                <div class="left-transaction-container">
                    <img src="{{ asset('assets/Transaction/gambar_kue.jpg') }}" alt="Gambar Kue" width="206px" height="203px">
                    <div class="transaction-detail-container">
                        <div class="notif-main-text">Konfirmasi Kue Sudah Diterima</div>
                        <div class="notif-sub-text">Kue <b>Unicake</b> Menunggu Konfirmasi Kue Sudah Diterima</div>
                        <div class="notif-date">08-03-2023 19:59 ▼</div>
                    </div>
                </div>
                <div class="notif-button"><a href="">Klik Disini Untuk Konfirmasi Pembayaran!</a></div>
            </div>
        </div>

        <div class="customer-history">History</div>
        <div class="cart">
            <img src="{{ asset('assets/Icon/cart.jpg') }}" alt="Gambar Cart" width="335px" height="289px">
            <div class="belanja-text">Oops Anda Belum ada Belanjaan nihh</div>
            <div class="belanja-text">Ayo Belanja !</div>
            <a href="" class="button-container-link-wrap">
                <div class="button-container">
                    <div class="button-start-text">Let's Start</div>
                    <img src="{{ asset('assets/Icon/start.png') }}" alt="Gambar Ayo" width="36px" height="36px">
                </div>
            </a>
        </div>
    </div>
@endsection