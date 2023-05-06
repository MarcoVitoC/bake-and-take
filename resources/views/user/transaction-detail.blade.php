<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/user/payment-confirmation.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"/>
    <title>Bake & Take | {{ $title }}</title>
</head>
<body>
    <div class="main-container">
        <div class="head-text">Transaction Detail</div>
        <div class="inner-container">
            <img src="{{ asset('storage/' . $transaction->cake->cake_photo) }}" alt="Gambar Kue" width="303px" height="255px" class="img-kue">
            <div class="payment-detail">
                <div class="display-kanan">
                    <div><b>Cake Name: {{ $transaction->cake->cake_name }}</b></div>
                </div>
                <div class="display-kanan">
                    <div>Subtotal Product: {{ $transaction->quantity * $transaction->cake->cake_price }}</div>
                </div>
                <div class="display-kanan">
                    <div>Handling Fee: 1.000</div>
                </div>
                <div class="display-kanan">
                    <div>Service Fee: 1.500</div>
                </div>
                <div class="total-harga">
                    <div>Total Payment: {{ ($transaction->quantity * $transaction->cake->cake_price) + 2500 }}</div>
                </div>
                <div class="metode-pembayaran">
                    <div>Payment Method: Transfer</div>
                </div>
            </div>
        </div>
        <div class="btn-container">
            <div class="btn-konfirmasi">
                <a href="/user/transaction"><button>Back</button></a>
            </div>
        </div>
    </div>
</body>
</html>