@extends('layouts.user')

@section('container')
  @include('components.user-navbar')
  <div class="empty-space"></div>
  <div class="dropdown">
    <div class="my-profile">
      <button type="submit"><img src="{{ asset('assets/User/profile.png') }}" alt="Log Out" width="30px" height="30px"> My Profile</button>
    </div>
    <div class="logout">
      <form action="/" method="post">
        @csrf
        <button type="submit"><img src="{{ asset('assets/User/logout.png') }}" alt="Log Out" width="25px" height="25px"> Log Out</button>
      </form>
    </div>
  </div>
  <div class="carousel">
    <h1>Hello</h1>
  </div>
@endsection