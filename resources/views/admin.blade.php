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
  <div>
    <div class="add-cake">
      <h2>My Cakes:</h2>
      <button type="button" href="/">+ Add Cake</button>
    </div>
  </div>
  {{-- @include('components.footer') --}}
@endsection