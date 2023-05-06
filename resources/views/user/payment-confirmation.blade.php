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
        <div class="head-text">Payment Confirmation</div>
        <div class="inner-container">
            <img src="{{ asset('storage/' . $transaction->cake->cake_photo) }}" alt="Gambar Kue" width="303px" height="255px" class="img-kue">
            <div class="payment-detail">
                <div class="display-kanan">
                    <div><b>Nama kue: {{ $transaction->cake->cake_name }}</b></div>
                </div>
                <div class="display-kanan">
                    <div>Subtotal Product: {{ $transaction->quantity * $transaction->cake->cake_price }}</div>
                </div>
                <div class="display-kanan">
                    <div>Biaya Penanganan: 1.000</div>
                </div>
                <div class="display-kanan">
                    <div>Biaya Layanan: 1.500</div>
                </div>
                <div class="total-harga">
                    <div>Total Pesanan: {{ ($transaction->quantity * $transaction->cake->cake_price) + 2500 }}</div>
                </div>
                <div class="metode-pembayaran">
                    <div>Metode Pembayaran: Transfer</div>
                </div>
            </div>
        </div>
        <div class="btn-container">
            <div class="btn-konfirmasi">
                <a href="/user/payment-success"><button>Confirm</button></a>
                <form action="/user/payment-confirmation/{{ $transaction->id }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>