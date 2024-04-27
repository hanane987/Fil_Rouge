<!-- nav.blade.php -->
<style>
.navbar{
  position:fixed;
  z-index:99999;
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
          @if(Auth::user()->role=='user')
          <li class="nav-item">
            <a class="nav-link" href="{{route('myreservations')}}">Reservations</a>
          </li>
          @endif
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
    .carousel-item {
      height: 100vh;
      min-height: 350px;
      background: no-repeat center center scroll;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }


    

    body {
      background: white;
    }

    h1 {
      color: #fff;
    }

    .lead {
      color: #aaa;
    }

    .wrapper {
      margin: 10vh
    }

    .card {
      border: none;
      transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
      overflow: hidden;
      border-radius: 20px;
      min-height: 450px;
      box-shadow: 0 0 12px 0 rgba(0, 0, 0, 0.2);
    }

    .card-has-bg {
      transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
      background-size: 120%;
      background-repeat: no-repeat;
      background-position: center center;
    }

    .card-has-bg:before {
      content: '';
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      background: inherit;
      -webkit-filter: grayscale(1);
      -moz-filter: grayscale(100%);
      -ms-filter: grayscale(100%);
      -o-filter: grayscale(100%);
      filter: grayscale(100%);
    }

    .card-has-bg:hover {
      transform: scale(0.98);
      box-shadow: 0 0 5px -2px rgba(0, 0, 0, 0.3);
      background-size: 130%;
    }

    .card-has-bg:hover .card-img-overlay {
      background: rgb(255, 186, 33);
      background: linear-gradient(0deg, rgba(255, 186, 33, 0.5) 0%, rgba(255, 186, 33, 1) 100%);
    }

    .card-footer {
      background: none;
      border-top: none;
    }

    .card-footer .media img {
      border: solid 3px rgba(255, 255, 255, 0.3);
    }

    .card-title {
      font-weight: 800
    }

    .card-meta {
      color: rgba(0, 0, 0, 0.3);
      text-transform: uppercase;
      font-weight: 500;
      letter-spacing: 2px;
    }

    .card-body {
      transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
    }

    .card:hover .card-body {
      margin-top: 30px;
    }

    .card:hover {
      cursor: pointer;
    }

    .card-img-overlay {
      background: rgb(255, 186, 33);
      background: linear-gradient(0deg, rgba(255, 186, 33, 0.3785889355742297) 0%, rgba(255, 186, 33, 1) 100%);
    }
    .portfolio-img {
  transition: transform 0.3s ease-in-out;
}

.portfolio-img-hover:hover {
  transform: scale(1.1);
}

.footer-custom {
  width: 100%;
  padding: 2rem 0; /* Adjust padding as needed */
  background-color: rgba(0, 0, 0, 0.2);
  position: fixed;
  bottom: 0;
  left: 0;
  z-index: 1000; /* Ensure the footer stays above other content */
  /* Initially hide the footer */
}
.footer-custom {
  width: 1700px;
  padding: 2rem 0;
  background-color: #23242a;
  color: #fff;
  position: relative;
  bottom: 0;
  left: 0;
  z-index: 1000;
}

.footer-custom a {
  color: #fff;
}

.footer-custom a:hover {
  color: #5e9693;
}

@import url(https://fonts.googleapis.com/css?family=Quicksand:400,300);
body{
    font-family: 'Quicksand', sans-serif;
}
.gal-container{
	padding: 12px;
}
.gal-item{
	overflow: hidden;
	padding: 3px;
}
.gal-item .box{
	height: 350px;
	overflow: hidden;
}
.box img{
	height: 100%;
	width: 100%;
	object-fit:cover;
	-o-object-fit:cover;
}
.gal-item a:focus{
	outline: none;
}
.gal-item a:after{
	content:"\e003";
	font-family: 'Glyphicons Halflings';
	opacity: 0;
	background-color: rgba(0, 0, 0, 0.75);
	position: absolute;
	right: 3px;
	left: 3px;
	top: 3px;
	bottom: 3px;
	text-align: center;
    line-height: 350px;
    font-size: 30px;
    color: #fff;
    -webkit-transition: all 0.5s ease-in-out 0s;
    -moz-transition: all 0.5s ease-in-out 0s;
    transition: all 0.5s ease-in-out 0s;
}
.gal-item a:hover:after{
	opacity: 1;
}
.modal-open .gal-container .modal{
	background-color: rgba(0,0,0,0.4);
}
.modal-open .gal-item .modal-body{
	padding: 0px;
}
.modal-open .gal-item button.close{
    position: absolute;
    width: 25px;
    height: 25px;
    background-color: #000;
    opacity: 1;
    color: #fff;
    z-index: 999;
    right: -12px;
    top: -12px;
    border-radius: 50%;
    font-size: 15px;
    border: 2px solid #fff;
    line-height: 25px;
    -webkit-box-shadow: 0 0 1px 1px rgba(0,0,0,0.35);
	box-shadow: 0 0 1px 1px rgba(0,0,0,0.35);
}
.modal-open .gal-item button.close:focus{
	outline: none;
}
.modal-open .gal-item button.close span{
	position: relative;
	top: -3px;
	font-weight: lighter;
	text-shadow:none;
}
.gal-container .modal-dialogue{
	width: 80%;
}
.gal-container .description{
	position: relative;
	height: 40px;
	top: -40px;
	padding: 10px 25px;
	background-color: rgba(0,0,0,0.5);
	color: #fff;
	text-align: left;
}
.gal-container .description h4{
	margin:0px;
	font-size: 15px;
	font-weight: 300;
	line-height: 20px;
}
.gal-container .modal.fade .modal-dialog {
    -webkit-transform: scale(0.1);
    -moz-transform: scale(0.1);
    -ms-transform: scale(0.1);
    transform: scale(0.1);
    top: 100px;
    opacity: 0;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
}

.gal-container .modal.fade.in .modal-dialog {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    -webkit-transform: translate3d(0, -100px, 0);
    transform: translate3d(0, -100px, 0);
    opacity: 1;
}
@media (min-width: 768px) {
.gal-container .modal-dialog {
    width: 55%;
    margin: 50 auto;
}
}
@media (max-width: 768px) {
    .gal-container .modal-content{
        height:250px;
    }
}
/* Footer Style */
i.red{
    color:#BC0213;
}
.gal-container{
    padding-top :75px;
    padding-bottom:75px;
}
footer{
    font-family: 'Quicksand', sans-serif;
}
footer a,footer a:hover{
    color: #88C425;
}

  footer {
            background-color: #000;
            color: #fff;
            width: 100%;
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        footer .container {
            max-width: 100%;
            padding-left: 15px;
            padding-right: 15px;
        }
        footer a {
            color: #fff;
        }
        footer a:hover {
            color: #ccc;
        }

  </style>





<header>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-image: url('https://source.unsplash.com/1920x1080/?beauty,salon')">
        <div class="carousel-caption">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/1920x1080/?beauty,salon')">
        <div class="carousel-caption">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/1920x1080/?beauty,salon')">
        <div class="carousel-caption">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/1920x1080/?beauty,salon')">
        <div class="carousel-caption">
          <h5>Fourth slide label</h5>
          <p>Some representative placeholder content for the fourth slide.</p>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/1920x1080/?beauty,salon')">
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