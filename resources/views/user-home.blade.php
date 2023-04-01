@extends('layouts.main')

@section('container')
  @include('components.user-home-navbar')
  <div class="empty-space"></div>
  <div class="slideshow-container" id="home">
    <div class="mySlides fade">
      <img src="{{ asset('assets/User/Carousel/Carousel/061499300_1588239901-food-plate-chocolate-dessert-132694.jpg')  }}" class="gambar">
    </div>
    <div class="mySlides fade">
      <img src="{{ asset('assets/User/Carousel/Carousel/maxresdefault.jpg')  }}" class="gambar">
    </div>
    <div class="mySlides fade">
      <img src="{{ asset('assets/User/Carousel/Carousel/22.-Cara-Membuat-Foto-Produk-yang-Menarik-untuk-Promosi-Kue.jpg')  }}" class="gambar">
    </div>
    <div class="mySlides fade">        
        <img src="{{ asset('assets/User/Carousel/Carousel/ayu-ting-ting_20171107_202309.jpg')  }}" class="gambar">
    </div>
  </div>
  <br>

  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
  </div>

  <div class="view-category" id="category">
    <div class="view-category-title">
      <h1>Category</h1>
    </div>
    <div class="view-categoryBtn-container">
      <button class="chocolate">Chocolate</button>
      <button class="cheese">Cheese</button>
      <button class="strawberry">Strawberry</button>
    </div>
    <div class="add-cake-products">
      <div class="all-products-container" id="chocolate">
        @foreach ($chocolates as $chocolate)
          <div class="single-product-container">
            <a href="/user/product-detail/{{ $chocolate->id }}"><img src="{{ asset('storage/' . $chocolate->cake_photo) }}" alt="gambar kue" width="307px" height="257px" class="img-single-cake"></a>
            <div class="single-product-name">{{ $chocolate->cake_name }}</div>
            <div class="single-product-desc">{{ $chocolate->excerpt }}</div>
          </div>
        @endforeach
      </div>
      <div class="all-products-container" id="cheese">
        @foreach ($cheeses as $cheese)
          <div class="single-product-container">
            <a href="/user/product-detail/{{ $cheese->id }}"><img src="{{ asset('storage/' . $cheese->cake_photo) }}" alt="gambar kue" width="307px" height="257px" class="img-single-cake"></a>
            <div class="single-product-name">{{ $cheese->cake_name }}</div>
            <div class="single-product-desc">{{ $cheese->excerpt }}</div>
          </div>
        @endforeach
      </div>
      <div class="all-products-container" id="strawberry">
        @foreach ($strawberrys as $strawberry)
          <div class="single-product-container">
            <a href="/user/product-detail/{{ $strawberry->id }}"><img src="{{ asset('storage/' . $strawberry->cake_photo) }}" alt="gambar kue" width="307px" height="257px" class="img-single-cake"></a>
            <div class="single-product-name">{{ $strawberry->cake_name }}</div>
            <div class="single-product-desc">{{ $strawberry->excerpt }}</div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
  <div class="view-all-product" id="menu">
    <div class="view-all-product-title">
      <h1>Love and Passion All In Our Menu</h1>
      <h4>Bake and Take now provides a ready made menu and can be customized at will</h4>
    </div>
    <div class="add-cake-products">
      <div class="all-products-container">
        @foreach ($cakes as $cake)
          <div class="single-product-container">
            <a href="/user/product-detail/{{ $cake->id }}"><img src="{{ asset('storage/' . $cake->cake_photo) }}" alt="gambar kue" width="307px" height="257px" class="img-single-cake"></a>
            <div class="single-product-name">{{ $cake->cake_name }}</div>
            <div class="single-product-desc">{{ $cake->excerpt }}</div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
  <div class="about-us" id="user-about-us">
    <div class="about-us-title">
      <h1>About Us</h1>
    </div>
    <div class="row-tentang-toko">
      <div class="column-tentang-toko">
        <a class="prev-slide" onclick="push(-1)">&#10094;</a>
        <img class="baker baker1" src="{{ asset('assets/baker/baker.jpg') }}" alt="" width="555px" height="400px">
        <img class="baker baker2" src="{{ asset('assets/baker/baker2.jpeg') }}" alt="" width="555px" height="400px"> 
        <a class="next-slide" onclick="push(1)">&#10095;</a>
      </div>
      <div class="deskripsi-toko">
        Kue Ini dibuat dengan  memanaskan susu cair, mentega dan gula sampai meleleh menggunakan api kecil mencegah bahan-Bahan menjadi gosong dan lengket. lalu di masukan ke dalam wadah lain dengan campuran telur, dan pasta coklat lalu di kocok. kemudian di campurkan ke dalam tepung terigu, coklat bubuk, baking powder dan soda kue diaduk hingga rata dengan pengaduk sehingga tidak ada gelembung dan warna menjadi merata lalu di kukus di dalem oven dengan suhu tinggi diamkan kurang lebih 25 menit sehingga matang sempurna dan mengembang dengan sempurna. dan di hias sedemikian rupa dengan bahan dan kerajingan tangan yang berkualitas.
      </div>
    </div>
  </div>
  @include('components.footer')
@endsection