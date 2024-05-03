<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Dashboard</title>
    <!-- Link to CSS file -->
    {{-- <link rel="stylesheet" href="{{ asset("/css/stylesdash.css") }}">
    <!-- Link to JS file -->
    <script src="{{ asset("/js/dash.js") }}"></script> --}}
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
</head>
<body>

@include('Layouts.nav')

<div>{{$slot}}</div>



<footer class="py-4 no-print">
    <div class="container">
        <div class="row py-4">
            <div class="col-12 col-lg-3 mb-4 mb-lg-0">
                <p class="small mb-1">Mountain View</p>
                <p class="small mb-1">California, United States</p>
                <p class="small mb-1">Tel: +1 123-456-7890</p>
                <p class="small mb-0"><a class="text-dark text-decoration-none" href="">hello@yourdomain.com</a></p>
            </div>
            <div class="col-6 col-lg-2 mb-4 mb-lg-0">
                <h4>Quick Links</h4>
                <ul class="list-unstyled">
                    <li class="mb-1">
                        <a class="text-dark text-decoration-none" href="">Home</a>
                    </li>
                    <li class="mb-1">
                        <a class="text-dark text-decoration-none" href="">About</a>
                    </li>
                    <li class="mb-1">
                        <a class="text-dark text-decoration-none" href="">Shop</a>
                    </li>
                    <li class="mb-1">
                        <a class="text-dark text-decoration-none" href="">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="col-6 col-lg-2 mb-4 mb-lg-0">
                <h4>Useful Info</h4>
                <ul class="list-unstyled">
                    <li class="mb-1">
                        <a class="text-dark text-decoration-none" href="">How it Works</a>
                    </li>
                    <li class="mb-1">
                        <a class="text-dark text-decoration-none" href="">FAQ</a>
                    </li>
                    <li class="mb-0">
                        <a class="text-dark text-decoration-none" href="">Contacts</a>
                    </li>
                </ul>
            </div>
            <div class="col-6 col-lg-2 mb-4 mb-lg-0">
                <h4>My Account</h4>
                <ul class="list-unstyled">
                    <li class="mb-1">
                        <a class="text-dark text-decoration-none" href="">Get Help</a>
                    </li>
                    <li class="mb-1">
                        <a class="text-dark text-decoration-none" href="">My Orders</a>
                    </li>
                    <li class="mb-1">
                        <a class="text-dark text-decoration-none" href="">Track Order</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-lg-3">
                <div class="border-top pt-4 d-lg-none"></div>
                <h4>Subscribe</h4>
                <div class="input-group mb-2">
                    <input class="form-control bg-light" placeholder="Email address" type="text">
                    <button class="btn btn-primary" type="button">Subscribe</button>
                </div>
                <p class="small text-muted mb-0">Sign up for our newsletter to get the latest updates on features and releases.</p>
            </div>
        </div>
        <div class="d-lg-flex align-item-ceneter justify-content-between border-top py-3 py-lg-2 mt-lg-5">
            <div class="small mb-2 mb-lg-0 text-muted">
                © 2023 FreeFrontend.dev. All rights reserved.
            </div>
            <div class="small">
                <a class="d-block d-lg-inline text-muted ms-lg-3 mb-2 mb-lg-0" href="">Privacy Policy</a>
                <a class="d-block d-lg-inline text-muted ms-lg-3 mb-2 mb-lg-0" href="">Terms of Service</a>
            </div>
            <div class="d-none d-lg-block ms-auto">
                <a class="me-2" href=""><svg class="bi bi-pinterest text-primary" fill="currentColor" height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z"></path>
                </svg></a>
                <a class="me-2" href=""><svg class="bi bi-twitter text-primary" fill="currentColor" height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                </svg></a>
                <a class="me-2" href=""><svg class="bi bi-facebook text-primary" fill="currentColor" height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                </svg></a>
            </div>
            <div class="d-lg-none">
                <div class="input-group mb-2">
                    <input class="form-control bg-light" placeholder="Email address" type="text">
                    <button class="btn btn-primary" type="button">Subscribe</button>
                </div>
                <p class="small text-muted mb-0">Sign up for our newsletter to get the latest updates on features and releases.</p>
            </div>
            <div class="small">
                <a class="d-block d-lg-inline text-muted ms-lg-3 mb-2 mb-lg-0" href="">Privacy Policy</a>
                <a class="d-block d-lg-inline text-muted ms-lg-3 mb-2 mb-lg-0" href="">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>
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
      background:  #FFC0CB;
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
  z-index: 1000; 
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
  {{-- display:block;
  margin:0 auto; --}}
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

        .accordion-button{
          border:0;
          background:transparent;
          border-bottom:solid 1px;

        }
        .faq-container {
  width: 80%;
  margin: 0 auto;
  font-family: Arial, sans-serif;
}
 
.faq-item {
  margin: 20px 0;
  border: 1px solid #ccc;
}
 
.faq-item input {
  display: none;
}
 
.faq-item label {
  display: block;
  padding: 15px;
  cursor: pointer;
  background-color: #eee;
}
 
.faq-item label:hover {
  background-color: #ddd;
}
 
.faq-item input:checked + label {
  background-color: #ccc;
}
 
.answer {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.5s ease;
  padding: 0 15px;
}
 
.answer p {
  margin: 15px 0;
}
 
.faq-item input:checked ~ .answer {
  max-height: 1000px;
}

  </style>
</body>

</html>
