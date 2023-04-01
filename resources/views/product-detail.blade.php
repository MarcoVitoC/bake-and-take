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
                        <div>Protection</div>
                        <div class="list-pengiriman">Pengiriman</div>
                        <div>Tipe Pembayaran</div>
                        <div>Quantity</div>
                        <form action="/user/product-detail/{{ $cake->id }}" method="post">
                            @csrf
                            <button type="submit" class="fav-button">
                                <img src="{{ asset('assets/Transaction/favorit.jpg') }}" alt="Gambar Hati" width="25px" height="20px">
                                <div class="fav-text">Favorite</div>
                            </button>
                        </form>
                    </div>

                    <div class="detail-isi">
                        <div>Proteksi Kerusakan Kue <button class="proteksi-info"><b>?</b></button></div>
                        <div class="alamat-pengiriman">Pengiriman Menuju {{ auth()->user()->address }}</div>
                        <div>Transfer</div>
                        <form action="/user/product-detail/{{ $cake->id }}" method="post" enctype="multipart/form-data">
                            @csrf
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