







<!doctype html>
<!-- Reine - Beauty Salon HTML5 Template design by DSAThemes (http://www.dsathemes.com) -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">



	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="author" content="DSAThemes">	
		<meta name="description" content="Reine - Beauty Salon HTML5 Template">
		<meta name="keywords" content="DSAThemes, Beauty, Salon, Beauty Parlour, Health Care, Makeup, Nail Salon, Therapy, Treatment">
		<meta name="viewport" content="width=device-width, initial-scale=1">
				
  		<!-- SITE TITLE -->
		<title>Reine - Beauty Salon HTML5 Template</title>
							
		<!-- FAVICON AND TOUCH ICONS -->
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
		<link rel="icon" href="images/apple-touch-icon.png" type="image/x-icon">

		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css2?family=Alex+Brush&amp;display=swap" rel="stylesheet">	
		<link href="https://fonts.googleapis.com/css2?family=Vollkorn:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
<!-- BOOTSTRAP CSS -->
<link href="{{asset('cssv/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('cssv/css/flaticon.css')}}" rel="stylesheet">

<!-- PLUGINS STYLESHEET -->
<link href="{{asset('cssv/css/menu.css')}}" rel="stylesheet"> 
<link id="effect" href="{{asset('cssv/cssv/css/dropdown-effects/fade-down.css')}}" media="all" rel="stylesheet">
<link href="{{asset('cssv/css/magnific-popup.css')}}" rel="stylesheet">  
<link href="{{asset('cssv/css/owl.carousel.min.css')}}" rel="stylesheet">
<link href="{{asset('cssv/css/owl.theme.default.min.css')}}" rel="stylesheet">
<link href="{{asset('cssv/css/datetimepicker.min.css')}}" rel="stylesheet">
<link href="{{asset('cssv/css/lunar.css')}}" rel="stylesheet">

<!-- ON SCROLL ANIMATION -->
<link href="{{asset('cssv/css/animate.css')}}" rel="stylesheet">

<!-- TEMPLATE CSS -->
<link href="{{asset('cssv/css/style.css')}}" rel="stylesheet"> 

<!-- RESPONSIVE CSS -->
<link href="{{asset('cssv/css/responsive.css')}}" rel="stylesheet">

<!-- Custom CSS -->
<link href="{{asset('css/custom.css')}}" rel="stylesheet">
<link href="cssv/css/bootstrap.min.css" rel="stylesheet">



	</head>



	<body>
<div>
@include('Layouts.nav')
</div>
    {{$slot}}
	<!-- EXTERNAL SCRIPTS
		============================================= -->	
		<script src="cssv/js/jquery-3.7.0.min.js"></script>
		<script src="cssv/js/bootstrap.min.js"></script>	
		<script src="cssv/js/modernizr.custom.js"></script>
		<script src="cssv/js/jquery.easing.js"></script>
		<script src="cssv/js/menu.js"></script>
		<script src="cssv/js/datetimepicker.js"></script>	
		<script src="cssv/js/owl.carousel.min.js"></script>
		<script src="cssv/js/jquery.magnific-popup.min.js"></script>
		<script src="cssv/js/request-form.js"></script>	
		<script src="cssv/js/jquery.validate.min.js"></script>
		<script src="cssv/js/jquery.ajaxchimp.min.js"></script>	
		<script src="cssv/js/popper.min.js"></script>
		<script src="cssv/js/lunar.js"></script>
		<script src="cssv/js/wow.js"></script>
				<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<!-- Custom Script -->		
		<script src="cssv/js/custom.js"></script>

		<script>
			$(document).on({
			    "contextmenu": function (e) {
			        console.log("ctx menu button:", e.which); 

			        // Stop the context menu
			        e.preventDefault();
			    },
			    "mousedown": function(e) { 
			        console.log("normal mouse down:", e.which); 
			    },
			    "mouseup": function(e) { 
			        console.log("normal mouse up:", e.which); 
			    }
			});
		</script>

		<script>
			$(function() {
			  $(".switch").click(function() {
			  	 $("body").toggleClass("theme--dark");
			  });
			});
		</script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->															
		<!--
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-XXXXX-X']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		-->	


	</body>


</html>
