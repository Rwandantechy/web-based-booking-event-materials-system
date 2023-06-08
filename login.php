<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>User Login</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=2">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-9" />
	<meta name="keywords" content="Events Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
		SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Custom Theme files -->
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/style.css" type="text/css" rel="stylesheet" media="all">  
	<link href="css/font-awesome.css" rel="stylesheet">		<!-- font-awesome icons -->
	<!-- //Custom Theme files --> 
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>  
	<!-- //js -->
	<!-- web-fonts -->  
	<link href="//fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<!-- //web-fonts -->


	<!-- //Meta tag Keywords -->
	<!--/Style-CSS -->
	<link rel="stylesheet" href="css/css_2/style.css" type="text/css" media="all" />
	<!--//Style-CSS -->
</head>

<body>
	<!-- /login-section -->
	<div class="header-w3layouts"> 
		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Events</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.html"><img src="./images/logo.png" width="200px" class="logo"></a></h1>
				</div> 
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
						<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
						<li class="hidden"><a class="page-scroll" href="#page-top"></a>	</li>
						<li><a class="hvr-sweep-to-right" href="index.html">Home</a></li>
						<li><a class="hvr-sweep-to-right" href="about.html">About Us</a></li>
						<li><a class="hvr-sweep-to-right" href="events.html">Events</a></li>
						<li><a class="hvr-sweep-to-right" href="contact.html">Contact Us</a></li>
						 <li class="dropdown">
								<a href="#" class="dropdown-toggle hvr-sweep-to-right" data-hover="Pages" data-toggle="dropdown">Login <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a class="hvr-sweep-to-right" href="suplier.html">Suplier</a></li>
									<li><a class="hvr-sweep-to-right" href="customer.html">Customer</a></li>
								</ul>
						  </li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->
		</nav>  
	</div>

	<section class="w3l-forms-23">
		<div class="forms23-block-hny">
			<div class="wrapper">
				
				<!-- if logo is image enable this   
					<a class="logo" href="index.html">
					  <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
					</a> 
				-->
				<div class="d-grid forms23-grids">
					<div class="form23">
						<div class="main-bg">
							<h6 class="sec-one"></h6>
							<div class="speci-login first-look">
								<img src="images/user.png" alt="" class="img-responsive">
							</div>
						</div>
						<div class="bottom-content">
							<form action="loginServer.php" method="POST">
								<select class="input-form">
									<option>choose your category...</option>
									<option value="Customer">Customer</option>
									<option value="Suplier">Suplier</option>
								</select>
								<input type="email" name="email" class="input-form" placeholder="Your Email"
										required="required" />
								<input type="password" name="password" class="input-form"
										placeholder="Your Password" required="required" />
								<button type="submit" class="loginhny-btn btn" name="login">Login</button>
							</form>
							<p>Not a member yet? <a href="#">Join Now!</a></p>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- //login-section -->

<!-- /footer-top -->							

<!-- footer -->
<div class="copy-right">
	<div class="container">
	<div class="col-md-6 col-sm-6 col-xs-6 copy-right-grids">
			<div class="copy-left">
			<p>&copy; 2023 Events. All rights reserved | Design by Worth<a href="http://w3layouts.com/"> ulk movement</a></p>
			</div>
		</div>
	<div class="col-md-6 col-sm-6 col-xs-6 top-middle">
			<ul>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-vimeo"></i></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
		</div>
</div>

<!-- //footer -->
<!-- bootstrap-modal-pop-up -->
<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
<div class="modal-dialog" role="document">
<div class="modal-content">
	<div class="modal-header">
		Events
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
	</div>
		<div class="modal-body">
			
			<div class="slideshow-container">

				<div class="mySlides fade">
				  <div class="numbertext">1 / 3</div>
				  <img src="./images/b1.jpg" style="width:100%">
				  <div class="text">Birthday Partie</div>
				</div>
				
				<div class="mySlides fade">
				  <div class="numbertext">2 / 3</div>
				  <img src="./images/b2.jpg" style="width:100%">
				  <div class="text">Wedding Ceremony</div>
				</div>
				
				<div class="mySlides fade">
				  <div class="numbertext">3 / 3</div>
				  <img src="./images/g4.jpg" style="width:100%">
				  <div class="text">New Year Parties</div>
				</div>
				
				<a class="prev" onclick="plusSlides(-1)">❮</a>
				<a class="next" onclick="plusSlides(1)">❯</a>
				
				</div>
				<br>
				
				<div style="text-align:center">
				  <span class="dot" onclick="currentSlide(1)"></span> 
				  <span class="dot" onclick="currentSlide(2)"></span> 
				  <span class="dot" onclick="currentSlide(3)"></span> 
				</div>
				
				<script>
				let slideIndex = 1;
				showSlides(slideIndex);
				
				function plusSlides(n) {
				  showSlides(slideIndex += n);
				}
				
				function currentSlide(n) {
				  showSlides(slideIndex = n);
				}
				
				function showSlides(n) {
				  let i;
				  let slides = document.getElementsByClassName("mySlides");
				  let dots = document.getElementsByClassName("dot");
				  if (n > slides.length) {slideIndex = 1}    
				  if (n < 1) {slideIndex = slides.length}
				  for (i = 0; i < slides.length; i++) {
					slides[i].style.display = "none";  
				  }
				  for (i = 0; i < dots.length; i++) {
					dots[i].className = dots[i].className.replace(" active", "");
				  }
				  slides[slideIndex-1].style.display = "block";  
				  dots[slideIndex-1].className += " active";
				}
				</script>
				






			<p>We link you with the best supliers in the city whom they provide 
				all matterials regarding Birthdays, Wedding and etc.
				This is the time to be in touch with us through out 
				this amazing website.
				<i>" Don't miss out all discounts that our supliers may offer.</i></p>
		</div>
</div>
</div>
</div>
<!-- //bootstrap-modal-pop-up --> 
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<script src="js/jquery-2.2.3.min.js"></script> 

<!-- skills -->

			<script src="js/responsiveslides.min.js"></script>
<script>
			// You can also use "$(window).load(function() {"
			$(function () {
			  // Slideshow 4
			  $("#slider4").responsiveSlides({
				auto: true,
				pager:true,
				nav:false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
				  $('.events').append("<li>before event fired.</li>");
				},
				after: function () {
				  $('.events').append("<li>after event fired.</li>");
				}
			  });
		
			});
</script>
<script>
					// You can also use "$(window).load(function() {"
					$(function () {
					  // Slideshow 4
					  $("#slider3").responsiveSlides({
						auto: true,
						pager:false,
						nav:true,
						speed: 500,
						namespace: "callbacks",
						before: function () {
						  $('.events').append("<li>before event fired.</li>");
						},
						after: function () {
						  $('.events').append("<li>after event fired.</li>");
						}
					  });
				
					});
				 </script>

<!-- start-smoth-scrolling -->
<!-- OnScroll-Number-Increase-JavaScript -->
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<!-- //OnScroll-Number-Increase-JavaScript -->
<!--flexiselDemo1 -->
<script type="text/javascript">
				$(window).load(function() {
					$("#flexiselDemo1").flexisel({
						visibleItems: 2,
						animationSpeed: 1000,
						autoPlay: true,
						autoPlaySpeed: 3000,    		
						pauseOnHover: true,
						enableResponsiveBreakpoints: true,
						responsiveBreakpoints: { 
							portrait: { 
								changePoint:480,
								visibleItems: 1
							}, 
							landscape: { 
								changePoint:640,
								visibleItems: 1
							},
							tablet: { 
								changePoint:991,
								visibleItems: 1
							}
						}
					});
					
				});
</script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<!--//flexiselDemo1 -->

<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
$(".scroll").click(function(event){		
event.preventDefault();
$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
});
});
</script>
<!-- start-smoth-scrolling -->
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
$(document).ready(function() {
/*
	var defaults = {
	containerID: 'toTop', // fading element id
	containerHoverID: 'toTopHover', // fading element hover id
	scrollSpeed: 1200,
	easingType: 'linear' 
	};
*/
					
$().UItoTop({ easingType: 'easeOutQuart' });
					
});
</script>
<!-- //here ends scrolling icon -->
</body>
</html>