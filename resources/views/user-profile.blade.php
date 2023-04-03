@extends('layouts.main')

@section('container')
  @include('components.user-navbar')
  <div class="profile-container">
    <div class="profile-box">Profile</div>
    <div class="profile-content">
      <div class="fullname">
        <h3><span class="label">Fullname</span>: {{ auth()->user()->fullname }}</h3>
      </div>
      <div class="email">
        <h3><span class="label">Email</span>: {{ auth()->user()->email }}</h3>
      </div>
      <div class="phone_number">
        <h3><span class="label">Phone Number</span>: {{ auth()->user()->phone_number }}</h3>
      </div>
      <div class="dob">
        <h3><span class="label">Date of Birth</span>: {{ date('d M Y', strtotime(auth()->user()->dob)) }}</h3>
      </div>
      <div class="address">
        <h3><span class="label">Address</span>: {{ auth()->user()->address }}</h3>
      </div>
      <div class="profile-btn">
        <a href="/user/profile/change-password"><button>Change Password</button></a>
        <a href="/user/profile/update-profile"><button>Edit Profile</button></a>
      </div>
    </div>
  </div>
  @include('components.footer')
@endsection