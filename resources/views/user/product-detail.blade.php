@extends('layouts.main')

@section('container')
    @include('components.user-navbar')
    <div class="main-container">
        <div class="product-information-container">
            <div class="img-and-share">
                <img src="{{ asset('storage/' . $cake->cake_photo) }}" alt="Gambar Kue" width="534px" height="428.67px" class="img-kue">
            </div>
                
            <div>
                <div class="brand-title"><b>{{ $cake->cake_name }}</b></div>
                <div class="harga">Rp.{{ $cake->cake_price }}</div>
                <div class="detail-container">
                    <div class="detail-lists">
                        <div class="list-pengiriman">Shipping Address</div>
                        <div>Payment Method</div>
                        <div>Quantity</div>
                        @if ($favorite != null && $favorite->user_id == auth()->user()->id)
                            <form action="/user/product-detail/{{ $cake->id }}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="added-fav-button">
                                    <img src="{{ asset('assets/Transaction/added-favorite.png') }}" alt="Gambar Hati" width="28px" height="28px">
                                    <div class="fav-text" id="addedFavorite">Favorite</div>
                                </button>
                            </form>
                        @else
                            <form action="/user/product-detail/{{ $cake->id }}" method="post">
                                @csrf
                                <input type="hidden" name="action" value="favorite">
                                <button type="submit" class="fav-button">
                                    <img src="{{ asset('assets/Transaction/add-favorite-default.png') }}" alt="Gambar Hati" width="28px" height="28px">
                                    <div class="fav-text">Favorite</div>
                                </button>
                            </form>
                        @endif
                    </div>

                    <div class="detail-isi">
                        <div class="alamat-pengiriman">{{ auth()->user()->address }}</div>
                        <div>Transfer</div>
                        <form action="/user/product-detail/{{ $cake->id }}" method="post">
                            @csrf
                            <input type="hidden" name="action" value="order">
                            <div class="quantity">
                                <input type="number" id="quantity" name="quantity" min="1" required>
                            </div>
                            <button type="submit" class="buy-button">Order Now</button>
                        </form> 
                    </div>
                </div>
            </div>
        </div>

        <div class="deskripsi-produk">
            <div>Ingredients: </div>
            <div class="deskripsi-bahan">{{ $cake->cake_ingredients }}</div>
            <div class="teks-deskripsi">Description: </div>
            <div class="paragraf-deskripsi">{{ $cake->cake_description }}</div>
        </div>
    </div>
    @include('components.footer')
@endsection