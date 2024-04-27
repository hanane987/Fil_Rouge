<!-- nav.blade.php -->
<style>
.navbar{
  position:fixed;
  top:1%;
  left:0;
  background:rgba(0,0,0,0.3);
}
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top">
  <a class="navbar-brand" href="#">Your Website</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
     
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="#!">Offer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#!">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#!">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('myreservations')}}">Reservations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#!">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#!">Team</a>
          </li>
          @auth
            <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Logout</button>
                </form>
          </li>
          @endauth
         
        </ul>
        <ul class="navbar-nav d-flex flex-row">
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="#!">
              <i class="fas fa-shopping-cart"></i>
            </a>
          </li>
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="#!">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="#!">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
      @guest <!-- Check if the user is not authenticated -->
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
      @else <!-- If the user is authenticated -->
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </li>
      @endguest
    </ul>
  </div>
  
</nav>

<style>

.navbar {
  background-color: transparent !important;
  border-color: transparent !important;
}

.navbar-brand {
  color: white; /* Change the color of the brand text */
}

.navbar-toggler {
  border-color: white; /* Change the color of the toggler icon */
}

.navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

.navbar-nav .nav-link {
  color: white !important; /* Change the color of the links */
}

.navbar-nav .nav-link:hover {
  color: #fff; /* Change the color of the links on hover */
}

</style>