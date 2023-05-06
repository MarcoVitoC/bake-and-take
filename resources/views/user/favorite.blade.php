@extends('layouts.main')

@section('container')
    @include('components.user-navbar')
    <div class="fav-main-container">
        <div class="fav-top-container">
            <img src="{{ asset('assets/Icon/heart.jpg') }}" alt="Gambar Hati" width="80px" height="68px">
            <div class="fav-fav-text">Favorite</div>
        </div>
        <div class="fav-inner-container">
            @foreach ($favorites as $favorite)
                <div class="display-fav-container">
                    <img src="{{ asset('storage/' . $favorite->cake->cake_photo) }}" alt="Gambar Kue" width="206px" height="203px">
                    <div class="fav-detail-container">
                        <div class="fav-nama-kue">{{ $favorite->cake->cake_name }}</div>
                        <div class="fav-harga">Rp.{{ $favorite->cake->cake_price }}</div>
                        <a href="/user/product-detail/{{ $favorite->cake->cake_id }}" class="see-details">See Details</a>
                    </div>
                    <div class="details-fav-btn">
                        <form action="/user/favorite" method="post">
                            @method('delete')
                            @csrf
                            <input type="hidden" name="favoriteId" value="{{ $favorite->id }}">
                            <button type="submit" class="remove-favorite-btn">
                                <img src="{{ asset('assets/Transaction/heart.png') }}" alt="Gambar Kue" width="30px" height="30px" class="delete-fav-img">
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection