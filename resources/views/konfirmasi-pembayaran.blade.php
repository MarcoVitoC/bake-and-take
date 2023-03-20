<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/konfirmasi-pembayaran.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"/>

    <title>Konfirmasi Pembayaran</title>
</head>
<body>
    <div class="main-container">
        <div class="head-text">Konfirmasi Pembayaran</div>
        <div class="inner-container">
            <img src="{{ asset('assets/Transaction/gambar_kue.jpg') }}" alt="Gambar Kue" width="303px" height="255px" class="img-kue">
            <div class="payment-detail">
                <div class="display-kanan">
                    <div><b>Nama kue :</b></div>
                    <div><b>Uni Cake</b></div>
                </div>
                <div class="display-kanan">
                    <div>Subtotal Product :</div>
                    <div>130.000</div>
                </div>
                <div class="display-kanan">
                    <div>Biaya Penanganan :</div>
                    <div>1.000</div>
                </div>
                <div class="display-kanan">
                    <div>Biaya Layanan :</div>
                    <div>1.500</div>
                </div>
                <div class="total-harga">
                    <div>Total Pesanan :</div>
                    <div>150.000</div>
                </div>
                <div class="metode-pembayaran">
                    <div>Metode Pembayaran : Transfer</div>
                </div>
            </div>
        </div>
        <div class="btn-container">
            <div class="btn-konfirmasi">
                <a href="pembayaran-berhasil">Konfirmasi</a>
            </div>
        </div>
    </div>
</body>
</html>