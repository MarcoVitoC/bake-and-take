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
        @foreach ($transactions as $transaction)
          <tr>
            <td>{{ $transaction->id }}</td>
            <td>{{ $transaction->fullname }}</td>
            <td>{{ $transaction->cake_name }}</td>
            <td>{{ $transaction->quantity }}</td>
            <td>{{ date('d M Y', strtotime($transaction->transaction_date)) }}</td>
            @if ($transaction->status_name === 'Ongoing')
              <td id="ongoing">{{ $transaction->status_name }}</td>
            @elseif ($transaction->status_name === 'Delivered')
              <td id="delivered">{{ $transaction->status_name }}</td>
            @else
              <td id="finished">{{ $transaction->status_name }}</td>
            @endif
            @if ($transaction->status_name === 'Ongoing')
            <td>
              <form action="/admin" method="post">
                @method('put')
                @csrf
                <input type="hidden" name="transactionId" value="{{ $transaction->id }}">
                <button type="submit">Update</button>
              </form>
            </td>
            @else
              <td><button style="display: none;">Update</button></td>
            @endif
          </tr>
        @endforeach
      </tbody>
    </table>
    @if (count($transactions) === 0)
      <h4 class="no-order-text">No Order Available</h4>
    @endif
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