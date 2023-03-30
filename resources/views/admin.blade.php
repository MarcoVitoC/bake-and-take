@extends('layouts.main')

@section('container')
  @include('components.admin-navbar')
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
  <div class="add-cake">
    <h2>My Cakes:</h2>
    <a href="/admin/add-cake"><button>+ Add Cake</button></a>
  </div>
  <div class="add-cake-products">
    <div class="all-products-container">
      @foreach ($cakes as $cake)
          <div class="single-product-container">
            <a href="/admin/edit-cake/{{ $cake->id }}"><img src="{{ asset('storage/' . $cake->cake_photo) }}" alt="gambar kue" width="307px" height="257px" class="img-single-cake"></a>
            <div class="single-product-name">{{ $cake->cake_name }}</div>
            <div class="single-product-desc">{{ $cake->excerpt }}</div>
            <a href="/admin/delete-cake/{{ $cake->id }}" class="delete-product"><img src="{{ asset('assets/Icon/Delete.png') }}" alt="Delete Cake" width="18px" height="18px"></a>
          </div>
      @endforeach
    </div>
  </div>
  @include('components.footer')
@endsection