@extends('layouts.main')

@section('container')
<div class="add-cake-form">
  <form action="/admin/add-cake" method="post" enctype="multipart/form-data">
    @csrf
    <div class="add-cake-form-bar">
      <input type="text" name="cake_name" placeholder="Cake Name..." autofocus value="{{ old('cake_name') }}">
      @error('cake_name')
        <div class="invalid-msg">{{ $message }}</div>
      @enderror
    </div>
    <div class="add-cake-form-bar">
      <input type="text" name="cake_price" placeholder="Cake Price..." value="{{ old('cake_price') }}">
      @error('cake_price')
        <div class="invalid-msg">{{ $message }}</div>
      @enderror
    </div>
    <div class="add-cake-form-bar">
      <input type="text" name="cake_ingredients" placeholder="Cake Ingredients..." value="{{ old('cake_ingredients') }}">
      @error('cake_ingredients')
        <div class="invalid-msg">{{ $message }}</div>
      @enderror
    </div>
    <div class="add-cake-form-bar">
      <input type="text" name="cake_description" placeholder="Cake Description..." value="{{ old('cake_description') }}">
      @error('cake_description')
        <div class="invalid-msg">{{ $message }}</div>
      @enderror
    </div>
    <div class="add-cake-form-bar">
      <select name="category_id" required>
        <option value="" disabled selected>Cake Categories...</option>
        @foreach ($categories as $category)
          @if (old('category_id') == $category->id)
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
    <div class="add-cake-form-bar">
      <label for="cake_photo">Upload Cake Photo </label><br>
      <input type="file" name="cake_photo" id="cake_photo">
      @error('cake_photo')
        <div class="invalid-msg">{{ $message }}</div>
      @enderror
    </div>
    <div class="add-btn">
      <button type="submit">ADD</button>
    </div>
  </form>
</div>
@endsection