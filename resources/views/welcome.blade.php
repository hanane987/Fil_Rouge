

<x-home-layout>

  
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



<!-- ABOUT US  -->
<section class="py-5" id="about">
	<div class="container">
		<div class="row gx-4 align-items-center justify-content-between">
			<div class="col-md-5 order-2 order-md-1">
				<div class="mt-5 mt-md-0">
					<span class="text-muted">Our Story</span>
					<h2 class="display-5 fw-bold">About Us</h2>
					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris .</p>
					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
				</div>
			</div>
			<div class="col-md-6 offset-md-1 order-1 order-md-2">
				<div class="row gx-2 gx-lg-3">
					<div class="col-6">
						<div class="mb-2"><img class="img-fluid rounded-3" src="https://source.unsplash.com/random/400x400" alt="Image 1"></div>
					</div>
					<div class="col-6">
						<div class="mb-2"><img class="img-fluid rounded-3" src="https://source.unsplash.com/random/401x401" alt="Image 2"></div>
					</div>
					<div class="col-6">
						<div class="mb-2"><img class="img-fluid rounded-3" src="https://source.unsplash.com/random/402x402" alt="Image 3"></div>
					</div>
					<div class="col-6">
						<div class="mb-2"><img class="img-fluid rounded-3" src="https://source.unsplash.com/random/403x403" alt="Image 4"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

{{-- FAQ --}}
<section class="py-5" id="faq">
	<div class="container">
		<div class="row justify-content-center text-center mb-3">
			<div class="col-lg-8 col-xl-7">
				<span class="text-muted">F.A.Q</span>
				<h2 class="display-5 fw-bold">Frequently Asked Questions</h2>
				<p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit Consequatur quidem eius cum voluptatum quasi delectus.</p>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-5">
				<span class="text-muted">Lorem ipsum dolor</span>
				<h2 class="pb-4 fw-bold">Have Any Questions?</h2>
				<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur quidem eius cum voluptatum quasi delectus assumenda culpa.</p><a class="btn btn-primary btn-lg mt-3" href="#">Contact us</a>
			</div>
			<div class="col-md-7">
				<div class="accordion" id="Questions-accordion">
					<div class="accordion-item">
						<h2 class="accordion-header" id="Questions-headingOne"><button aria-controls="Questions-collapseOne" aria-expanded="false" class="accordion-button collapsed bg-light" data-bs-target="#Questions-collapseOne" data-bs-toggle="collapse" type="button">
						<div class="text-muted me-3">
							<svg class="bi bi-question-circle-fill" fill="currentColor" height="24" viewbox="0 0 16 16" width="24" xmlns="http://www.w3.org/2000/svg">
							<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"></path></svg>
						</div>Lorem ipsum dolor sit amet adipisicing ?</button></h2>
						<div aria-labelledby="Questions-headingOne" class="accordion-collapse collapse" data-bs-parent="#Questions-accordion" id="Questions-collapseOne">
							<div class="accordion-body">
								Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime quos voluptatum at, quibusdam blanditiis saepe soluta laborum, repellendus nemo id porro dolor eveniet perspiciatis veritatis doloremque aliquam nam! Libero, nostrum!
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="Questions-headingTwo"><button aria-controls="Questions-collapseTwo" aria-expanded="false" class="accordion-button collapsed bg-light" data-bs-target="#Questions-collapseTwo" data-bs-toggle="collapse" type="button">
						<div class="text-muted me-3">
							<svg class="bi bi-question-circle-fill" fill="currentColor" height="24" viewbox="0 0 16 16" width="24" xmlns="http://www.w3.org/2000/svg">
							<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"></path></svg>
						</div>Lorem ipsum dolor sit amet adipisicing ?</button></h2>
						<div aria-labelledby="Questions-headingTwo" class="accordion-collapse collapse" data-bs-parent="#Questions-accordion" id="Questions-collapseTwo">
							<div class="accordion-body">
								Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime quos voluptatum at, quibusdam blanditiis saepe soluta laborum, repellendus nemo id porro dolor eveniet perspiciatis veritatis doloremque aliquam nam! Libero, nostrum!
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="Questions-headingThree"><button aria-controls="Questions-collapseThree" aria-expanded="false" class="accordion-button collapsed bg-light" data-bs-target="#Questions-collapseThree" data-bs-toggle="collapse" type="button">
						<div class="text-muted me-3">
							<svg class="bi bi-question-circle-fill" fill="currentColor" height="24" viewbox="0 0 16 16" width="24" xmlns="http://www.w3.org/2000/svg">
							<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"></path></svg>
						</div>Lorem ipsum dolor sit amet adipisicing ?</button></h2>
						<div aria-labelledby="Questions-headingThree" class="accordion-collapse collapse" data-bs-parent="#Questions-accordion" id="Questions-collapseThree">
							<div class="accordion-body">
								Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime quos voluptatum at, quibusdam blanditiis saepe soluta laborum, repellendus nemo id porro dolor eveniet perspiciatis veritatis doloremque aliquam nam! Libero, nostrum!
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="Questions-headingFour"><button aria-controls="Questions-collapseFour" aria-expanded="false" class="accordion-button collapsed bg-light" data-bs-target="#Questions-collapseFour" data-bs-toggle="collapse" type="button">
						<div class="text-muted me-3">
							<svg class="bi bi-question-circle-fill" fill="currentColor" height="24" viewbox="0 0 16 16" width="24" xmlns="http://www.w3.org/2000/svg">
							<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"></path></svg>
						</div>Lorem ipsum dolor sit amet adipisicing ?</button></h2>
						<div aria-labelledby="Questions-headingFour" class="accordion-collapse collapse" data-bs-parent="#Questions-accordion" id="Questions-collapseFour">
							<div class="accordion-body">
								Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime quos voluptatum at, quibusdam blanditiis saepe soluta laborum, repellendus nemo id porro dolor eveniet perspiciatis veritatis doloremque aliquam nam! Libero, nostrum!
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


{{-- cards --}}
<section class="wrapper" id="cards">
  <div class="container">
    <div class="row">
      <div class="col text-center mb-5">
         <h1 class="display-4 font-weight-bolder">Bootstrap 4 Cards With Background Image</h1>
  <p class="lead">Lorem ipsum dolor sit amet at enim hac integer volutpat maecenas pulvinar. </p>
      </div>
    </div>
  <div class="row">
 {{-- <div class="col-sm-12 col-md-6 col-lg-4 mb-4"><div class="card text-dark card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?tech,street');">
         <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street" alt="Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">Thought Leadership</small>
            <h4 class="card-title mt-0 "><a class="text-dark" herf="https://creativemanner.com">Web Developmet Lorem Ipsum Sit Amet Consectetur dipisi?</a></h4>
           <small><i class="far fa-clock"></i> October 15, 2020</small>
          </div>
          <div class="card-footer">
           <div class="media">
  <img class="mr-3 rounded-circle" src="https://assets.codepen.io/460692/internal/avatars/users/default.png?format=auto&version=1688931977&width=80&height=80" alt="Generic placeholder image" style="max-width:50px">
  <div class="media-body">
    <h6 class="my-0 text-dark d-block">Oz Coruhlu</h6>
     <small>Director of UI/UX</small>
  </div>
</div>
          </div>
        </div>
      </div></div> --}}
     {{-- <div class="col-sm-12 col-md-6 col-lg-4 mb-4"><div class="card text-dark card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?tree,nature');">
         <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tree,nature" alt="Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">Thought Leadership</small>
            <h4 class="card-title mt-0 "><a class="text-dark" herf="https://creativemanner.com">Creative Manner Lorem Ipsum Sit Amet Consectetur dipisi?</a></h4>
           <small><i class="far fa-clock"></i> October 15, 2020</small>
          </div>
          <div class="card-footer">
           <div class="media">
  <img class="mr-3 rounded-circle" src="https://assets.codepen.io/460692/internal/avatars/users/default.png?format=auto&version=1688931977&width=80&height=80" alt="Generic placeholder image" style="max-width:50px">
  <div class="media-body">
    <h6 class="my-0 text-dark d-block">Oz Coruhlu</h6>
     <small>Director of UI/UX</small>
  </div>
</div>
          </div>
        </div>
      </div></div> --}}
 {{--  <div class="col-sm-12 col-md-6 col-lg-4 mb-4"><div class="card text-dark card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?computer,design');">
         <img class="card-img d-none" src="https://source.unsplash.com/600x900/?computer,design" alt="Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">Thought Leadership</small>
            <h4 class="card-title mt-0 "><a class="text-dark" herf="https://creativemanner.com">Design Studio Lorem Ipsum Sit Amet Consectetur dipisi?</a></h4>
           <small><i class="far fa-clock"></i> October 15, 2020</small>
          </div>
          <div class="card-footer">
           <div class="media">
  <img class="mr-3 rounded-circle" src="https://assets.codepen.io/460692/internal/avatars/users/default.png?format=auto&version=1688931977&width=80&height=80" alt="Generic placeholder image" style="max-width:50px">
  <div class="media-body">
    <h6 class="my-0 text-dark d-block">Oz Coruhlu</h6>
     <small>Director of UI/UX</small>
  </div>
</div>
          </div>
        </div>
      </div></div>
   
    <div class="col-sm-12 col-md-6 col-lg-4 mb-4"><div class="card text-dark card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?tech,street');">
         <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street" alt=" Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">Thought Leadership</small>
            <h4 class="card-title mt-0 "><a class="text-dark" herf="https://creativemanner.com">UI/UX Design Lorem Ipsum Sit Amet Consectetur dipisi?</a></h4>
           <small><i class="far fa-clock"></i> October 15, 2020</small>
          </div>
          <div class="card-footer">
           <div class="media">
  <img class="mr-3 rounded-circle" src="https://assets.codepen.io/460692/internal/avatars/users/default.png?format=auto&version=1688931977&width=80&height=80" alt="Generic placeholder image" style="max-width:50px">
  <div class="media-body">
    <h6 class="my-0 text-dark d-block">Oz Coruhlu</h6>
     <small>Director of UI/UX</small>
  </div>
</div>
          </div>
        </div>
      </div></div>
     <div class="col-sm-12 col-md-6 col-lg-4 mb-4"><div class="card text-dark card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?tree,nature');">
         <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tree,nature" alt="Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">Thought Leadership</small>
            <h4 class="card-title mt-0 "><a class="text-dark" herf="https://creativemanner.com">Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?</a></h4>
           <small><i class="far fa-clock"></i> October 15, 2020</small>
          </div>
          <div class="card-footer">
           <div class="media">
  <img class="mr-3 rounded-circle" src="https://assets.codepen.io/460692/internal/avatars/users/default.png?format=auto&version=1688931977&width=80&height=80" alt="Generic placeholder image" style="max-width:50px">
  <div class="media-body">
    <h6 class="my-0 text-dark d-block">Oz Coruhlu</h6>
     <small>Director of UI/UX</small>
  </div>
</div>
          </div>
        </div>
      </div></div> --}}


@foreach($services as $service)
<div class="col-sm-12 col-md-6 col-lg-4 mb-4">
    <div class="card text-dark card-has-bg click-col" style="background-image:url('/storage/{{$service->image}}');">
        <img class="card-img d-none" src="/storage/{{$service->image}}" alt="Service Image">
        <div class="card-img-overlay d-flex flex-column justify-content-between">
            <div class="card-body">
                <!-- Display service name at the top -->
                <h5 class="card-title text-center" >{{ $service->name }}</h5>
                <!-- Description in the middle -->
                <p class="card-text text-center d-flex flex-column justify-items-center ">
                    {{ substr($service->description, 0, 100) }}
                    @if (strlen($service->description) > 100)
                        ...
                    @endif
                </p>
            </div>
            <div class="card-footer">
                <!-- "View more" button at the bottom -->
                <a href="{{ route('service.show', $service->id) }}" class="btn btn-primary btn-block">View More</a>
            </div>
        </div>
    </div>
</div>
@endforeach

  
</div>
  
</div>
</section>

{{-- TEAM --}}
<section class="py-5" id="team">
	<div class="container">
		<div class="row justify-content-center text-center mb-2 mb-lg-4">
			<div class="col-12 col-lg-8 col-xxl-7 text-center mx-auto">
				<span class="text-muted">Our Team</span>
				<h2 class="display-5 fw-bold">Meet the Team</h2>
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta harum ipsum venenatis metus sem veniam eveniet aperiam suscipit.</p>
			</div>
		</div>
		<div class="row">
		
		
		@foreach ($estheticien as $team )
        
   
			<div class="col-md-6 col-lg-3">
				<div class="card text-center border-0 mb-3">
					<div class="card-body p-3">
						<div class="mb-4 mx-lg-3 mx-xxl-5"><img class="img-fluid rounded-circle" src="/storage/{{$team->image}}"></div>
						<h5 class="fw-bold">{{$team->first_name}}</h5>
						<div class="text-muted">
							{{$team->description}}
						</div>
						<div class="d-flex justify-content-center mt-4">
							<a class="btn btn-sm me-2" href=""><svg class="bi bi-facebook" fill="currentColor" height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
							<path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path></svg></a> <a class="btn btn-sm me-2" href=""><svg class="bi bi-twitter" fill="currentColor" height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
							<path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path></svg></a> <a class="btn btn-sm" href=""><svg class="bi bi-linkedin" fill="currentColor" height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
							<path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"></path></svg></a>
						</div>
					</div>
                      <a href="{{ route('profil_esth', $team->id) }}" class="btn btn-primary mt-3">View Profile</a> <!-- This is the View Profile button -->

				</div>
			</div>
		</div>
     @endforeach
	</div>
  
</section>
{{-- portfolio --}}



<section>
  <div class="container gal-container" id="gallery">
    <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#1">
          <img src="http://nabeel.co.in/files/bootsnipp/gallery/1.jpg">
        </a>
        <div class="modal fade" id="1" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="http://nabeel.co.in/files/bootsnipp/gallery/1.jpg">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the first one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#2">
          <img src="http://nabeel.co.in/files/bootsnipp/gallery/2.jpg">
        </a>
        <div class="modal fade" id="2" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="http://nabeel.co.in/files/bootsnipp/gallery/2.jpg">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the second one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#3">
          <img src="http://nabeel.co.in/files/bootsnipp/gallery/3.jpg">
        </a>
        <div class="modal fade" id="3" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="http://nabeel.co.in/files/bootsnipp/gallery/3.jpg">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the third one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#4">
          <img src="http://nabeel.co.in/files/bootsnipp/gallery/4.jpg">
        </a>
        <div class="modal fade" id="4" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="http://nabeel.co.in/files/bootsnipp/gallery/4.jpg">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the fourth one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#5">
          <img src="http://nabeel.co.in/files/bootsnipp/gallery/5.jpg">
        </a>
        <div class="modal fade" id="5" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="http://nabeel.co.in/files/bootsnipp/gallery/5.jpg">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the fifth one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#6">
          <img src="http://nabeel.co.in/files/bootsnipp/gallery/6.jpg">
        </a>
        <div class="modal fade" id="6" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="http://nabeel.co.in/files/bootsnipp/gallery/6.jpg">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the sixth one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#7">
          <img src="http://nabeel.co.in/files/bootsnipp/gallery/7.jpg">
        </a>
        <div class="modal fade" id="7" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="http://nabeel.co.in/files/bootsnipp/gallery/7.jpg">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the seventh one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#8">
          <img src="http://nabeel.co.in/files/bootsnipp/gallery/8.jpg">
        </a>
        <div class="modal fade" id="8" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="http://nabeel.co.in/files/bootsnipp/gallery/8.jpg">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the eighth one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#9">
          <img src="http://nabeel.co.in/files/bootsnipp/gallery/9.jpg">
        </a>
        <div class="modal fade" id="9" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="http://nabeel.co.in/files/bootsnipp/gallery/9.jpg">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the ninth one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#10">
          <img src="http://nabeel.co.in/files/bootsnipp/gallery/10.jpg">
        </a>
        <div class="modal fade" id="10" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="http://nabeel.co.in/files/bootsnipp/gallery/10.jpg">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the tenth one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#11">
          <img src="http://nabeel.co.in/files/bootsnipp/gallery/11.jpg">
        </a>
        <div class="modal fade" id="11" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="http://nabeel.co.in/files/bootsnipp/gallery/11.jpg">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the leventh one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#12">
          <img src="http://nabeel.co.in/files/bootsnipp/gallery/12.jpg">
        </a>
        <div class="modal fade" id="12" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="http://nabeel.co.in/files/bootsnipp/gallery/12.jpg">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the 12th one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#13">
          <img src="http://nabeel.co.in/files/bootsnipp/gallery/13.jpg">
        </a>
        <div class="modal fade" id="13" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="http://nabeel.co.in/files/bootsnipp/gallery/13.jpg">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the 13th one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#14">
          <img src="http://nabeel.co.in/files/bootsnipp/gallery/14.jpg">
        </a>
        <div class="modal fade" id="14" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="http://nabeel.co.in/files/bootsnipp/gallery/14.jpg">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the 14th one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#15">
          <img src="http://nabeel.co.in/files/bootsnipp/gallery/15.jpg">
        </a>
        <div class="modal fade" id="15" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="http://nabeel.co.in/files/bootsnipp/gallery/15.jpg">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the 15th one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#16">
          <img src="http://nabeel.co.in/files/bootsnipp/gallery/16.jpg">
        </a>
        <div class="modal fade" id="16" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="http://nabeel.co.in/files/bootsnipp/gallery/16.jpg">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the 16th one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


{{-- footer --}}


<!-- Bootstrap JavaScript and jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- Custom JavaScript for automatic sliding -->
<script>
  $(document).ready(function(){
    // Automatically slide the carousel every 3 seconds
    $('#carouselExampleCaptions').carousel({
      interval: 3000
    });
  });
</script>


</x-home-layout>