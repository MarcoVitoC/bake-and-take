@extends('layouts.transaction')

@section('container')
<div class="body-halaman-utama">
<!-- Slideshow container -->
  <div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <img src="{{ asset('assets/Home/Carousel/Promosi-Kue.jpg')  }}" class="gambar">
    </div>
  
    <div class="mySlides fade">
      <img src="{{ asset('assets/Home/Carousel/maxresdefault.jpg')  }}" class="gambar">
    </div>
  
    <div class="mySlides fade">
      <img src="{{ asset('assets/Home/Carousel/food-plate-chocolate-dessert.jpg')  }}" class="gambar">
    </div>

    <div class="mySlides fade">        
        <img src="{{ asset('assets/Home/Carousel/ayu-ting-ting.jpg')  }}" class="gambar">
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



  <div class="category-halaman-utama">Category</div>
  <div class="button-category">
    <button class="button-chocolate">Chocolate</button>
    <button class="button-cheese">Cheese</button>
    <button class="button-strawberry">Strawberry</button>
  </div>
  <div class="chocolate-img">
    <img class="cake1" src="{{ asset('assets/Cakes2022/download(1).jpeg') }}" alt="kue1" width="300px" height="250px">
    <img class="cake2" src="{{ asset('assets/Cakes2022/download(2).jpeg') }}" alt="kue2" width="300px" height="250px">
    <img class="cake3" src="{{ asset('assets/Cakes2022/images(1).jpeg') }}" alt="kue3" width="300px" height="250px">
    <img class="cake4" src="{{ asset('assets/Cakes2022/images.jpeg') }}" alt="kue4" width="300px" height="280px">
    <img class="cake5" src="{{ asset('assets/Cakes2022/images(2).jpeg') }}" alt="kue5" width="300px" height="280px">
    <img class="cake6" src="{{ asset('assets/Cakes2020/images(1).jpeg') }}" alt="kue6" width="300px" height="280px">
  </div>
  <div class="cheese-img">
    <img class="cake1" src="{{ asset('assets/Cakes2021/download(1).jpeg') }}" alt="kue1" width="300px" height="250px">
    <img class="cake2" src="{{ asset('assets/Cakes2021/download(3).jpeg') }}" alt="kue2" width="300px" height="250px">
    <img class="cake3" src="{{ asset('assets/Cakes2021/download.jpeg') }}" alt="kue3" width="300px" height="250px">
    <img class="cake4" src="{{ asset('assets/Cakes2021/download(4).jpeg') }}" alt="kue4" width="300px" height="280px">
    <img class="cake5" src="{{ asset('assets/Cakes2021/download(5).jpeg') }}" alt="kue5" width="300px" height="280px">
    <img class="cake6" src="{{ asset('assets/Cakes2021/download(2).jpeg') }}" alt="kue6" width="300px" height="280px">
  </div>
  <div class="strawberry-img">
    <img class="cake1" src="{{ asset('assets/Cakes2020/images(1).jpeg') }}" alt="kue1" width="300px" height="250px">
    <img class="cake2" src="{{ asset('assets/Cakes2020/images(2).jpeg') }}" alt="kue2" width="300px" height="250px">
    <img class="cake3" src="{{ asset('assets/Cakes2020/images(3).jpeg') }}" alt="kue3" width="300px" height="250px">
    <img class="cake4" src="{{ asset('assets/Cakes2020/images(4).jpeg') }}" alt="kue4" width="300px" height="280px">
    <img class="cake5" src="{{ asset('assets/Cakes2020/images.jpeg') }}" alt="kue5" width="300px" height="280px">
    <img class="cake6" src="{{ asset('assets/Cakes2020/images(5).jpeg') }}" alt="kue6" width="300px" height="280px">
  </div>

  
  <div class="love-and-passion">Love and Passion All In Our Menu</div>
  <p class="bake-and-take">bake and take now provides a ready made menu and can be customized at will</p>

  <div class="bake-and-take-img">
    <img class="cake1" src="{{ asset('assets/Cakes2020/images(1).jpeg') }}" alt="kue1" width="300px" height="250px">
    <img class="cake2" src="{{ asset('assets/Cakes2020/images(2).jpeg') }}" alt="kue2" width="300px" height="250px">
    <img class="cake3" src="{{ asset('assets/Cakes2020/images(3).jpeg') }}" alt="kue3" width="300px" height="250px">
    <img class="cake4" src="{{ asset('assets/Cakes2020/images(4).jpeg') }}" alt="kue4" width="300px" height="280px">
    <img class="cake5" src="{{ asset('assets/Cakes2020/images.jpeg') }}" alt="kue5" width="300px" height="280px">
    <img class="cake6" src="{{ asset('assets/Cakes2020/images(5).jpeg') }}" alt="kue6" width="300px" height="280px">
    <img class="cake1" src="{{ asset('assets/Cakes2022/download(1).jpeg') }}" alt="kue1" width="300px" height="250px">
    <img class="cake2" src="{{ asset('assets/Cakes2022/download(2).jpeg') }}" alt="kue2" width="300px" height="250px">
    <img class="cake3" src="{{ asset('assets/Cakes2022/images(1).jpeg') }}" alt="kue3" width="300px" height="250px">
    <img class="cake4" src="{{ asset('assets/Cakes2022/images.jpeg') }}" alt="kue4" width="300px" height="280px">
    <img class="cake5" src="{{ asset('assets/Cakes2022/images(2).jpeg') }}" alt="kue5" width="300px" height="280px">
    <img class="cake6" src="{{ asset('assets/Cakes2020/images(1).jpeg') }}" alt="kue6" width="300px" height="280px">
  </div>

  <div class="tentang-toko">Tentang Toko</div>
  <div class="row-tentang-toko">
    <div class="column-tentang-toko">
      <a class="prev-slide" onclick="push(-1)">&#10094;</a>
      <img class="baker baker1" src="{{ asset('assets/baker/baker.jpg') }}" alt="" width="555px" height="400px">
      <img class="baker baker2" src="{{ asset('assets/baker/baker2.jpeg') }}" alt="" width="555px" height="400px"> 
      <a class="next-slide" onclick="push(1)">&#10095;</a>
    </div>
    <div class="deskripsi-toko">Kue Ini dibuat dengan  memanaskan susu cair, mentega dan gula sampai meleleh menggunakan api kecil mencegah bahan-Bahan menjadi gosong dan lengket. lalu di masukan ke dalam wadah lain dengan campuran telur, dan pasta coklat lalu di kocok. kemudian di campurkan ke dalam tepung terigu, coklat bubuk, baking powder dan soda kue diaduk hingga rata dengan pengaduk sehingga tidak ada gelembung dan warna menjadi merata lalu di kukus di dalem oven dengan suhu tinggi diamkan kurang lebih 25 menit sehingga matang sempurna dan mengembang dengan sempurna. dan di hias sedemikian rupa dengan bahan dan kerajingan tangan yang berkualitas.</div>

  </div>

</div>




@endsection