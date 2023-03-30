@extends('layouts.main')

@section('container')
    @include('components.admin-navbar')
    <div class="empty-space"></div>
    <div class="main-container">
        <div class="product-container">
            <h1>⚠️ Confirm Your Deletion ⚠️</h1>
            <img src="{{ asset('storage/' . $cake->cake_photo) }}" alt="Gambar Kue" width="350px" height="350px" class="img-kue">
        </div>
        <div class="delete-confirmation">
            <h2>Are you sure to <span class="deleteTxt">delete</span> <span class="productTxt">{{ $cake->cake_name }}</span> from your <span class="productTxt">list</span>?</h2>
            <div class="confirmBtn">
                <form action="/admin/delete-cake/{{ $cake->id }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit">Yes</button>
                </form>
                <a href="/admin"><button>No</button></a>
            </div>
        </div>
    </div>
    @include('components.footer')
@endsection