@extends('layouts.main')

@section('container')
    @include('components.admin-navbar')
    <div class="empty-space"></div>
    <div class="main-container">
        <div class="product-container">
            <img src="{{ asset('storage/' . $cake->cake_photo) }}" alt="Gambar Kue" width="350px" height="350px" class="img-kue">
            <div class="nama-kue">{{ $cake->cake_name }}</div>
            <div class="harga-kue">Rp.{{ $cake->cake_price }}</div>
            <div class="category-container">
                <div class="teks-category">Category</div>
                <div class="category-kue">{{ $cake->category_name }}</div>
            </div>
        </div>

        <div class="deskripsi-produk">
            <div class="teks-deskripsi">Description: </div>
            <div>Ingredients: </div>
            <div class="deskripsi-bahan">{{ $cake->cake_ingredients }}</div>
            <div class="paragraf-deskripsi">{{ $cake->cake_description }}</div>
        </div>

        <a href="/admin/update-cake/{{ $cake->id }}"><div class="edit-button">Edit</div></a>
    </div>
    @include('components.footer')
@endsection