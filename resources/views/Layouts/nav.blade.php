<!-- nav.blade.php -->
<style>
.custom-navbar {
    background-color: rgba(0,0,0,0.5);
    display:flex;
    justify-content:space-between;
    }  

</style>
<nav class="no-print navbar navbar-expand-lg navbar-dark fixed-top custom-navbar">


  <div class="container custom-navbar">
    <a class="navbar-brand" href="#"><h1 class="text-warning">Ze<span class="text-white">ine</span></h1></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav  mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{route('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#cards">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#gallery">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#faq">FAQ</a>
        </li>
        @auth
        @if(Auth::user()->role=='user')
        <li class="nav-item">
          <a class="nav-link" href="{{route('myreservations')}}">Reservations</a>
        </li>
        
        @endif
        @endauth
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#team">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('user_profile')}}">My Profile</a>
        </li>
      </ul>
       <ul class="navbar-nav d-flex flex-row">
         
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
  </div>
</nav>

<script>
  // Close responsive menu when a link is clicked
  var navLinks = document.querySelectorAll('.navbar-nav li a');
  navLinks.forEach(function(navLink) {
    navLink.addEventListener('click', function() {
      document.querySelector('.navbar-collapse').classList.remove('show');
    });
  });
</script>




<header class="no-print">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-image: url('{{ asset('storage/pictures/71Vpuc-h2FL._SL1312_.jpg') }}')">
        <div class="carousel-caption">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('{{ asset('storage/pictures/71Vpuc-h2FL._SL1312_.jpg') }}')">
        <div class="carousel-caption">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('{{ asset('storage/pictures/71Vpuc-h2FL._SL1312_.jpg') }}')">
        <div class="carousel-caption">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('{{ asset('storage/pictures/71Vpuc-h2FL._SL1312_.jpg') }}')">
        <div class="carousel-caption">
          <h5>Fourth slide label</h5>
          <p>Some representative placeholder content for the fourth slide.</p>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('{{ asset('storage/pictures/71Vpuc-h2FL._SL1312_.jpg') }}')">
        <div class="carousel-caption">
          <h5>Fifth slide label</h5>
          <p>Some representative placeholder content for the fifth slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</header>

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