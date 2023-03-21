<nav>
  <div class="logo"><a href="/home"><img src="{{ asset('assets/Logo.jpg') }}" alt="Bake & Take" width="60px" height="60px"></a></div>
  <div class="navbar-menu">
    <a class="menu home" href="#home">Home</a>
    <a class="menu gallery" href="#gallery">Category</a>
    <a class="menu menu" href="#menu">Menu</a>
    <a class="menu home-about-us" href="#home-about-us">About Us</a>
  </div>
  <div class="fav-transaction">
    <a href="/favorite"><button class="favorite-btn"><img src="{{ asset('assets/Home/favorite.png') }}" alt="Favorite" width="30px" height="30px"></button></a>
    <a href="/transaction"><button class="transaction-btn"><img src="{{ asset('assets/Home/transaction.png') }}" alt="Transaction" width="30px" height="30px"></button></a>
  </div>
  <button class="user">
    <img src="{{ asset('assets/Home/user.png') }}" alt="User" width="35px" height="35px">
    <h4>Welcome, </h4>
  </button>
</nav>