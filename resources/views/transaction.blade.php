@extends('layouts.main')

@section('container')
    @include('components.user-navbar')
    <a class="back" href="/user">&#60; Back</a>
    <div class="notif-main-container">
        <div class="notif-top-container">
            <img src="{{ asset('assets/Icon/transaction.png') }}" alt="Gambar Transaksi" width="88px" height="78px">
            <div class="notif-transaction-text">Transaction</div>
        </div>
        <div class="notif-inner-container">
            @foreach ($transactions as $transaction)
                <div class="display-transaction-container">
                    <div class="left-transaction-container">
                        <img src="{{ asset('storage/' . $transaction->cake_photo) }}" alt="Gambar Kue" width="210px" height="205px">
                        <div class="transaction-detail-container">
                            <h1 class="notif-main-text">{{ $transaction->cake_name }}</h1>
                            @if ($transaction->status_name === 'Ongoing')
                                <h2 class="notif-sub-text" id="ongoing">{{ $transaction->status_name }}</h2>
                            @elseif ($transaction->status_name === 'Delivered')
                                <h2 class="notif-sub-text" id="delivered">{{ $transaction->status_name }}</h2>
                            @endif
                            <h4 class="notif-date">{{ date('d M Y', strtotime($transaction->transaction_date)) }}</h4>
                            <a href="/user/transaction/transaction-detail/{{ $transaction->id }}" class="see-details">See Details</a>
                        </div>
                        @if ($transaction->status_name === 'Delivered')
                            <div>
                                <form action="/user/transaction" method="post">
                                    @method('put')
                                    @csrf
                                    <input type="hidden" name="transactionId" value="{{ $transaction->id }}">
                                    <button type="submit" class="confirm-order-btn">Confirm Order</button>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

        <div class="customer-history">History</div>
        @if (count($succeedTransactions) === 0)
            <div class="cart">
                <img src="{{ asset('assets/Icon/cart.jpg') }}" alt="Gambar Cart" width="335px" height="289px">
                <div class="belanja-text">Oops Anda Belum ada Belanjaan nihh</div>
                <div class="belanja-text">Ayo Belanja !</div>
                <div class="start">
                    <a href="/user"><button class="start-btn">Let's Start <img src="{{ asset('assets/telegram.png') }}" alt="" width="33px" height="33px"></button></a>
                </div>
            </div>
        @else
            <div class="notif-inner-container">
                @foreach ($succeedTransactions as $succeedTransaction)
                    <div class="display-transaction-container">
                        <div class="left-transaction-container">
                            <img src="{{ asset('storage/' . $succeedTransaction->cake_photo) }}" alt="Gambar Kue" width="210px" height="205px">
                            <div class="transaction-detail-container">
                                <div class="notif-main-text">{{ $succeedTransaction->cake_name }}</div>
                                <div class="notif-sub-text" id="finished">{{ $succeedTransaction->status_name }}</div>
                                <div class="notif-date">{{ date('d M Y', strtotime($succeedTransaction->transaction_date)) }}</div>
                                <a href="/user/transaction/transaction-detail/{{ $succeedTransaction->id }}" class="see-details">See Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection