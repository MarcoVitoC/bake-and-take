@extends('layouts.admin')

@section('container')
  @include('components.admin-navbar')
  <div class="empty-space"></div>
  <div class="dropdown">
    <div class="logout">
      <form action="/" method="post">
        @csrf
        <button type="submit"><img src="{{ asset('assets/User/logout.png') }}" alt="Log Out" width="25px" height="25px"> Log Out</button>
      </form>
    </div>
  </div>
  <div class="table">
    <table class="transaction-table">
      <thead>
        <tr>
          <th>No Pesanan</th>
          <th>Nama</th>
          <th>Nama Kue</th>
          <th>Jumlah Pesanan</th>
          <th>Tanggal Terbayar</th>
          <th>Status</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        {{-- nanti data di tabel ambil dari database --}}
        <tr>
          <td>1</td>
          <td>User</td>
          <td>Cake</td>
          <td>1</td>
          <td>20 Agustus 2022</td>
          <td>On Going</td>
          <td><button>Update</button></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="add-cake-container">
    <div class="add-cake-head">
      <h2>My Cakes:</h2>
      <button type="button" href="/">+ Add Cake</button>
    </div>

    <div class="all-products-container">
      <div class="single-product-container">
        <img src="{{ asset('assets/Cakes2022/download(1).jpeg') }}" alt="gambar kue" width="307px" height="257px" class="img-single-cake">
        <div class="single-product-name">Cheese Fiesta</div>
        <div class="single-product-desc">Tingginya Kue Kita ibaratkan TIngginya harapakn kita terhadap para kkonsumen kepada kami. dan selalu ingin memuaskan pelanggan dan qualitas terhadap para pe-</div>
        <button type="submit" class="delete-product"><img src="{{ asset('assets/Icon/delete.jpg') }}" alt="Gambar Kue" width="16px" height="18px" class="delete-fav-img"></button>
      </div>

      <div class="single-product-container">
        <img src="{{ asset('assets/Cakes2022/download(2).jpeg') }}" alt="gambar kue" width="307px" height="257px" class="img-single-cake">
        <div class="single-product-name">Rainbow Cake</div>
        <div class="single-product-desc">Ice cream merupakan bahan dasar dalam pembuatan kue kami di cuara yang panas ini enaknya menikmati kue yang dingin bersama orang yang sedang meraya-</div>
        <button type="submit" class="delete-product"><img src="{{ asset('assets/Icon/delete.jpg') }}" alt="Gambar Kue" width="16px" height="18px" class="delete-fav-img"></button>
      </div>

      <div class="single-product-container">
        <img src="{{ asset('assets/Cakes2022/images(1).jpeg') }}" alt="gambar kue" width="307px" height="257px" class="img-single-cake">
        <div class="single-product-name">Zhitshu Paw</div>
        <div class="single-product-desc">Pink merupakan warna dari warna dengan warna yang membuat warna menjadi warna dan warna yang menyatukan warna menjadi satu warna yaitu warna.</div>
        <button type="submit" class="delete-product"><img src="{{ asset('assets/Icon/delete.jpg') }}" alt="Gambar Kue" width="16px" height="18px" class="delete-fav-img"></button>
      </div>

      <div class="single-product-container">
        <img src="{{ asset('assets/Cakes2022/download(1).jpeg') }}" alt="gambar kue" width="307px" height="257px" class="img-single-cake">
        <div class="single-product-name">Cheese Fiesta</div>
        <div class="single-product-desc">Tingginya Kue Kita ibaratkan TIngginya harapakn kita terhadap para kkonsumen kepada kami. dan selalu ingin memuaskan pelanggan dan qualitas terhadap para pe-</div>
        <button type="submit" class="delete-product"><img src="{{ asset('assets/Icon/delete.jpg') }}" alt="Gambar Kue" width="16px" height="18px" class="delete-fav-img"></button>
      </div>

      <div class="single-product-container">
        <img src="{{ asset('assets/Cakes2022/download(2).jpeg') }}" alt="gambar kue" width="307px" height="257px" class="img-single-cake">
        <div class="single-product-name">Rainbow Cake</div>
        <div class="single-product-desc">Ice cream merupakan bahan dasar dalam pembuatan kue kami di cuara yang panas ini enaknya menikmati kue yang dingin bersama orang yang sedang meraya-</div>
        <button type="submit" class="delete-product"><img src="{{ asset('assets/Icon/delete.jpg') }}" alt="Gambar Kue" width="16px" height="18px" class="delete-fav-img"></button>
      </div>

      <div class="single-product-container">
        <img src="{{ asset('assets/Cakes2022/images(1).jpeg') }}" alt="gambar kue" width="307px" height="257px" class="img-single-cake">
        <div class="single-product-name">Zhitshu Paw</div>
        <div class="single-product-desc">Pink merupakan warna dari warna dengan warna yang membuat warna menjadi warna dan warna yang menyatukan warna menjadi satu warna yaitu warna.</div>
        <button type="submit" class="delete-product"><img src="{{ asset('assets/Icon/delete.jpg') }}" alt="Gambar Kue" width="16px" height="18px" class="delete-fav-img"></button>
      </div>
    </div>
  </div>
  
  {{-- @include('components.footer') --}}
@endsection