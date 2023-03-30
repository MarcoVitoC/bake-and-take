@extends('layouts.main')

@section('container')
<div class="update-cake-form">
  <form action="/admin/update-cake/{{ $cake->id }}" method="post" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="form-bar">
      <input type="text" name="cake_name" placeholder="Cake Name..." autofocus value="{{ old('cake_name', $cake->cake_name) }}">
      @error('cake_name')
        <div class="invalid-msg">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-bar">
      <input type="text" name="cake_price" placeholder="Cake Price..." value="{{ old('cake_price', $cake->cake_price) }}">
      @error('cake_price')
        <div class="invalid-msg">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-bar">
      <input type="text" name="cake_ingredients" placeholder="Cake Ingredients..." value="{{ old('cake_ingredients', $cake->cake_ingredients) }}">
      @error('cake_ingredients')
        <div class="invalid-msg">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-bar">
      <input type="text" name="cake_description" placeholder="Cake Description..." value="{{ old('cake_description', $cake->cake_description) }}">
      @error('cake_description')
        <div class="invalid-msg">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-bar">
      <select name="category_id" required>
        <option value="" disabled selected>Cake Categories...</option>
        @foreach ($categories as $category)
          @if (old('category_id', $cake->category_id) == $category->id)
            <option value="{{ $category->id }}" selected>{{ $category->category_name }}</option>
          @else
            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
          @endif
        @endforeach
      </select>
      @error('category_id')
        <div class="invalid-msg">{{ $message }}</div>
      @enderror
    </div>
    <div class="update-cake-img">
      <img src="{{ asset('storage/' . $cake->cake_photo) }}" class="cake-img-preview" alt="Gambar Kue" width="350px" height="350px">
      <input type="hidden" name="oldCakeImage" value="{{ $cake->cake_photo }}">
    </div>
    <div class="form-bar">
      <label for="cake_photo">Upload Cake Photo </label>
      <input type="file" name="cake_photo" id="cake_photo" required onchange="previewImage()">
      @error('cake_photo')
        <div class="invalid-msg">{{ $message }}</div>
      @enderror
    </div>
    <div class="update-btn">
      <button type="submit">Update</button>
    </div>
  </form>
</div>
@endsection