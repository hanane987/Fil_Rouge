

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



<!-- ABOUT US  -->
<section class="py-5 my-5" id="about">
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
						<div class="mb-2"><img class="img-fluid rounded-3" src="/storage//pictures/OIP (6).jpeg" alt="Image 1"></div>
					</div>
					<div class="col-6">
						<div class="mb-2"><img class="img-fluid rounded-3" src="/storage/pictures/OIP (8).jpeg" alt="Image 2"></div>
					</div>
					<div class="col-6">
						<div class="mb-2"><img class="img-fluid rounded-3" src="/storage/pictures/OIP (7).jpeg" alt="Image 3"></div>
					</div>
					<div class="col-6">
						<div class="mb-2"><img class="img-fluid rounded-3" src="/storage/pictures/OIP (5).jpeg" alt="Image 4"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<hr class="w-50 my-5 bg-warning" style="height: 3px; border-radius: 5px;">
{{-- FAQ --}}
<div class="faq-container">

  <h1 class="text-dark text-center my-5">Frequently Asked Questions</h1>
  <div class="faq-item">
    <input type="checkbox" id="question1">
    <label for="question1">What is HTML?</label>
    <div class="answer">
      <p>HTML stands for HyperText Markup Language. It is the standard markup language for creating web pages and web applications.</p>
    </div>
  </div>
  <div class="faq-item">
    <input type="checkbox" id="question2">
    <label for="question2">What is CSS?</label>
    <div class="answer">
      <p>CSS stands for Cascading Style Sheets. It is a style sheet language that describes how HTML elements are displayed on the screen.</p>
    </div>
  </div>
  <div class="faq-item">
    <input type="checkbox" id="question3">
    <label for="question3">How do I link CSS to HTML?</label>
    <div class="answer">
      <p>There are three ways to link CSS to HTML:</p>
      <ul>
        <li>Inline style: You can use the style attribute inside an HTML element to apply CSS rules to that element.</li>
        <li>Internal style: You can use the style tag inside the head section of an HTML document to define CSS rules for the whole document.</li>
        <li>External style: You can use the link tag inside the head section of an HTML document to link to an external CSS file.</li>
      </ul>
    </div>
  </div>
</div>

<hr class="w-50 my-5 bg-warning" style="height: 3px; border-radius: 5px;">
{{-- cards --}}
<section class="wrapper" id="cards">
  <div class="container">
    <div class="row">
      <div class="col text-center mb-5">
         <h1 class="display-4 font-weight-bolder text-dark">Our Services</h1>
      </div>
    </div>
  <div class="row">



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
<hr class="w-50 my-5 bg-warning" style="height: 3px; border-radius: 5px;">
{{-- TEAM --}}
<style>
    .card {
        height: 50%;
    }
   
</style>

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
            @foreach ($estheticien as $team)
                <div class="col-md-6 col-lg-3">
                    <div class="card text-center border-0 mb-3">
                        <div class="card-body p-3">
                            <div class="mb-4 mx-lg-3 mx-xxl-5"><img width="150" height="150" class=" rounded-circle" src="/storage/{{$team->image}}"></div>
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
            @endforeach
        </div>
    </div>
</section>
<hr class="w-50 my-5 bg-warning" style="height: 3px; border-radius: 5px;">

{{-- portfolio --}}


 <h1 class="display-4 font-weight-bolder text-dark text-center my-5">Gallery</h1>
<section class="d-flex justify-content-center">
  <div class="container gal-container row" id="gallery">
 
    <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
      <div class="box">
     
          <img src="http://nabeel.co.in/files/bootsnipp/gallery/1.jpg">
        
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
          <img src="http://nabeel.co.in/files/bootsnipp/gallery/2.jpg">
       
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
          <img src="/storage/pictures/8c5e835c4c70bc87c0daeae0a025f9df.jpg">
       
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
       
          <img src="/storage/pictures/9a0efc3a4ae1819376ebf76f092a44bb.jpg">
       
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
          <img src="/storage/pictures/layered-haircut-11.jpg">
        
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
          <img src="/storage/pictures/50-of-the-best-summer-nail-design-ideas-2023_11135133D.jpg">
       
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
          <img src="/storage/pictures/71Vpuc-h2FL._SL1312_.jpg">
       
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
          <img src="/storage/pictures/OIP (1).jpeg">
        
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
          <img src="/storage/pictures/pexels-sergeymakashin-5368633.jpg">
      
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
          <img src="/storage/pictures/8ff248a6a6bd73690c21fc79d2c09ec1.png">
       
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
          <img src="/storage/pictures/aesthetic-nails-designs-21.jpg">
        
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
          <img src="/storage/pictures/OIP.jpeg">
        
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
          <img src="/storage/pictures/9a0efc3a4ae1819376ebf76f092a44bb.jpg">
    
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
          <img src="/storage/pictures/pexels-cottonbro-3997378.jpg">
     
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
          <img src="/storage/pictures/pexels-cottonbro-3993469.jpg">
       
        <div class="modal fade" id="15" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="/storage/pictures/pexels-cottonbro-3993469.jpg">
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
          <img src="/storage/pictures/pexels-cottonbro-3993296.jpg">
      
        <div class="modal fade" id="16" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="/storage/pictures/pexels-cottonbro-3993465.jpg">
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