@extends('layouts.main')

@section('container')
    @include('components.user-navbar')
    <div class="notif-main-container">
        <div class="notif-top-container">
            <img src="{{ asset('assets/Icon/transaction.png') }}" alt="Gambar Transaksi" width="88px" height="78px">
            <div class="notif-transaction-text">Transaction</div>
        </div>
        <div class="notif-inner-container">
            @foreach ($ongoingTransactions as $ongoingTransaction)
                <div class="display-transaction-container">
                    <div class="left-transaction-container">
                        <img src="{{ asset('storage/' . $ongoingTransaction->cake->cake_photo) }}" alt="Gambar Kue" width="210px" height="205px">
                        <div class="transaction-detail-container">
                            <h1 class="notif-main-text">{{ $ongoingTransaction->cake->cake_name }}</h1>
                            @if ($ongoingTransaction->transactionHeader->status->status_name === 'Ongoing')
                                <h2 class="notif-sub-text" id="ongoing">{{ $ongoingTransaction->transactionHeader->status->status_name }}</h2>
                            @elseif ($ongoingTransaction->transactionHeader->status->status_name === 'Delivered')
                                <h2 class="notif-sub-text" id="delivered">{{ $ongoingTransaction->transactionHeader->status->status_name }}</h2>
                            @endif
                            <h4 class="notif-date">{{ date('d M Y', strtotime($ongoingTransaction->transactionHeader->transaction_date)) }}</h4>
                            <a href="/user/transaction/transaction-detail/{{ $ongoingTransaction->transactionHeader->id }}" class="see-details">See Details</a>
                        </div>
                        @if ($ongoingTransaction->transactionHeader->status->status_name === 'Delivered')
                            <div>
                                <form action="/user/transaction" method="post">
                                    @method('put')
                                    @csrf
                                    <input type="hidden" name="transactionId" value="{{ $ongoingTransaction->transactionHeader->id }}">
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
                <div class="belanja-text">There is no transaction</div>
                <div class="belanja-text">Let's Shop!</div>
                <div class="start">
                    <a href="/user"><button class="start-btn">Let's Start <img src="{{ asset('assets/telegram.png') }}" alt="" width="33px" height="33px"></button></a>
                </div>
            </div>
        @else
            <div class="notif-inner-container">
                @foreach ($succeedTransactions as $succeedTransaction)
                    <div class="display-transaction-container">
                        <div class="left-transaction-container">
                            <img src="{{ asset('storage/' . $succeedTransaction->cake->cake_photo) }}" alt="Gambar Kue" width="210px" height="205px">
                            <div class="transaction-detail-container">
                                <div class="notif-main-text">{{ $succeedTransaction->cake->cake_name }}</div>
                                <div class="notif-sub-text" id="finished">{{ $succeedTransaction->transactionHeader->status->status_name }}</div>
                                <div class="notif-date">{{ date('d M Y', strtotime($succeedTransaction->transactionHeader->transaction_date)) }}</div>
                                <a href="/user/transaction/transaction-detail/{{ $succeedTransaction->transactionHeader->id }}" class="see-details">See Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection