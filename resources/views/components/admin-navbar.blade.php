<nav>
  <div class="logo"><a href="/admin"><img src="{{ asset('assets/Logo.jpg') }}" alt="Bake & Take" width="60px" height="60px"></a></div>
  <button class="user">
    <img src="{{ asset('assets/User/user.png') }}" alt="User" width="35px" height="35px">
    <h4>Welcome, Admin &#x25BC;</h4>
  </button>
  <div class="dropdown">
    <div class="logout">
      <form action="/" method="post">
        @csrf
        <button type="submit"><img src="{{ asset('assets/User/logout.png') }}" alt="Log Out" width="40px" height="25px"> Log Out</button>
      </form>
    </div>
  </div>
</nav>