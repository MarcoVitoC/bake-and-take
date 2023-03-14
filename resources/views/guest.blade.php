@extends('layouts.main')

@section('container')
  <div class="home-first" id="home">
    <div class="home-first-text">
      <h3>ALL THE DIFFERENCE IN ONE TASTE CAN BE FOUND <br/>IN BAKE & TAKE</h3>
      <p>Bread is the basic ingredient for making cakes, sometimes bread is only considered <br/>a cheap and difficult food to make, but with bake and take it will be easy to do</p>
    </div>
    <div class="start">
      <a href="/login"><button class="start-btn">Let's Start <img src="{{ asset('assets/telegram.png') }}" alt="" width="33px" height="33px"></button></a>
    </div>
    <div class="home-first-img">
      <img src="{{ asset('assets/Home/Kue1.jpg') }}" alt="Kue 1" width="320px" height="365px">
      <img src="{{ asset('assets/Home/Kue4.jpeg') }}" alt="Kue 4" width="310px" height="270px">
      <img src="{{ asset('assets/Home/Kue3.jpg') }}" alt="Kue 3" width="310px" height="270px">
      <img src="{{ asset('assets/Home/Kue2.jpg') }}" alt="Kue 2" width="320px" height="365px">
    </div>
  </div>
  <div class="home-second" id="gallery">
    <div class="home-second-text">
      <h3>Our Cake Products</h3>
      <p>The best Baker can solve sweetness</p>
    </div>
    <div class="cake-year-container">
      <button type="button" class="cake-year2022"><span class="dot2022">&#9679;</span> Cakes of 2022</button>
      <button type="button" class="cake-year2021"><span class="dot2021">&#9679;</span> Cakes of 2021</button>
      <button type="button" class="cake-year2020"><span class="dot2020">&#9679;</span> Cakes of 2020</button>
      <button type="button" class="cake-year2019"><span class="dot2019">&#9679;</span> Cakes of 2019</button>
    </div>
    <div class="cake-year2022-img">
      <img class="cake1" src="{{ asset('assets/Cakes2022/download(1).jpeg') }}" alt="kue1" width="300px" height="250px">
      <img class="cake2" src="{{ asset('assets/Cakes2022/download(2).jpeg') }}" alt="kue2" width="300px" height="250px">
      <img class="cake3" src="{{ asset('assets/Cakes2022/images(1).jpeg') }}" alt="kue3" width="300px" height="250px">
      <img class="cake4" src="{{ asset('assets/Cakes2022/images.jpeg') }}" alt="kue4" width="300px" height="280px">
      <img class="cake5" src="{{ asset('assets/Cakes2022/images(2).jpeg') }}" alt="kue5" width="300px" height="280px">
      <img class="cake6" src="{{ asset('assets/Cakes2020/images(1).jpeg') }}" alt="kue6" width="300px" height="280px">
    </div>
    <div class="cake-year2021-img">
      <img class="cake1" src="{{ asset('assets/Cakes2021/download(1).jpeg') }}" alt="kue1" width="300px" height="250px">
      <img class="cake2" src="{{ asset('assets/Cakes2021/download(3).jpeg') }}" alt="kue2" width="300px" height="250px">
      <img class="cake3" src="{{ asset('assets/Cakes2021/download.jpeg') }}" alt="kue3" width="300px" height="250px">
      <img class="cake4" src="{{ asset('assets/Cakes2021/download(4).jpeg') }}" alt="kue4" width="300px" height="280px">
      <img class="cake5" src="{{ asset('assets/Cakes2021/download(5).jpeg') }}" alt="kue5" width="300px" height="280px">
      <img class="cake6" src="{{ asset('assets/Cakes2021/download(2).jpeg') }}" alt="kue6" width="300px" height="280px">
    </div>
    <div class="cake-year2020-img">
      <img class="cake1" src="{{ asset('assets/Cakes2020/images(1).jpeg') }}" alt="kue1" width="300px" height="250px">
      <img class="cake2" src="{{ asset('assets/Cakes2020/images(2).jpeg') }}" alt="kue2" width="300px" height="250px">
      <img class="cake3" src="{{ asset('assets/Cakes2020/images(3).jpeg') }}" alt="kue3" width="300px" height="250px">
      <img class="cake4" src="{{ asset('assets/Cakes2020/images(4).jpeg') }}" alt="kue4" width="300px" height="280px">
      <img class="cake5" src="{{ asset('assets/Cakes2020/images.jpeg') }}" alt="kue5" width="300px" height="280px">
      <img class="cake6" src="{{ asset('assets/Cakes2020/images(5).jpeg') }}" alt="kue6" width="300px" height="280px">
    </div>
    <div class="cake-year2019-img">
      <img class="cake1" src="{{ asset('assets/Cakes2022/download(1).jpeg') }}" alt="kue1" width="300px" height="250px">
      <img class="cake2" src="{{ asset('assets/Cakes2022/download(2).jpeg') }}" alt="kue2" width="300px" height="250px">
      <img class="cake3" src="{{ asset('assets/Cakes2022/images(1).jpeg') }}" alt="kue3" width="300px" height="250px">
      <img class="cake4" src="{{ asset('assets/Cakes2022/images.jpeg') }}" alt="kue4" width="300px" height="280px">
      <img class="cake5" src="{{ asset('assets/Cakes2022/images(2).jpeg') }}" alt="kue5" width="300px" height="280px">
      <img class="cake6" src="{{ asset('assets/Cakes2021/download(2).jpeg') }}" alt="kue6" width="300px" height="280px">
    </div>
  </div>
  <div class="home-third" id="about-us">
    <img src="{{ asset('assets/Home/about-us.jpg') }}" alt="About Us">
    <div class="home-third-text">
      <h3>"Not just a photo but a story"</h3>
      <h5>&#9679; Bake & Take</h5>
      <p>Are you one of those who are starting a business or just have dreams of <br/>becoming an entrepreneur? Yes, in doing business it takes courage to act. <br/>Indeed, in every business that is carried out, there must be risks or impacts <br/>that arise. Overcoming fear when starting a business is something that is <br/>needed for a business person.</p>
      <div class="homethird-exp-text">
        <div class="years-exp-text">
          <h3>5+</h3>
          <h5>Years Of Experience</h5>
        </div>
        <div class="become-sweet-text">
          <h3>200+</h3>
          <h5>Become Sweet Every Day</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="home-footer">
    <div class="home-footer-text">
      <h3>Bake & Take</h3>
      <p>Tidak ada yang lebih memuaskan daripada kue yang dibuat dengan <br/>hati yang tulus dan cita rasa yang terbaik. Kunjungi toko kami untuk <br/>merasakan nikmatnya kue-kue premium yang hanya bisa Anda <br/>dapatkan di sini.</p>
    </div>
    <div class="social-media">
      <a class="social-media-icon" href="https://www.facebook.com/" target="_blank"><img src="{{ asset('assets/Home/facebook.png') }}" alt="Facebook"></a>
      <a class="social-media-icon" href="https://www.instagram.com/" target="_blank"><img src="{{ asset('assets/Home/instagram.png') }}" alt="Instagram"></a>
      <a class="social-media-icon" href="https://www.linkedin.com/" target="_blank"><img src="{{ asset('assets/Home/linkedin.png') }}" alt="LinkedIn"></a>
      <a class="social-media-icon" href="https://www.google.com/gmail/about/" target="_blank"><img src="{{ asset('assets/Home/gmail.png') }}" alt="Gmail"></a>
    </div>
    <h5>Copyright @2023 Bake & Take</h5>
  </div>
@endsection