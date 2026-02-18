<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Education Loan Management System::Home Page</title>
	
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- pop up box -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome icons -->
	<link href="css/fontawesome-all.min.css" rel="stylesheet">
	<!-- //Custom Theme files -->
	<!-- online fonts -->
	<!-- titles -->
	<link href="//fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">
	<!-- body -->
	<link href="//fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">
</head>

<body>
	
	<?php include_once('includes/header.php');?>
	<!-- banner -->
	<section class="banner">
		<div class="callbacks_container">
			<ul class="rslides" id="slider3">
				<li>
					<div class="slider-info bg1">
						<div class="banner-text container">
							<h4 class="movetxt text-left mb-3 agile-title text-capitalize">Don't Miss Your Perfect Degree!</h4>
							<p class="text-white mb-3">#Let's get that dream degree!.</p>
						<!--<a class="bt text-capitalize" href="about.html" role="button"> read more
								<i class="fas fa-angle-double-right"></i>--->
							</a>
						</div>
					</div>
				</li>
				<li>
					<div class="slider-info bg2">
						<div class="banner-text container">
							<h4 class="movetxt text-left mb-3 agile-title text-capitalize">The Fastest Way To Your New Degree</h4>
							<p class="text-white mb-3">#Your Own Degree at less expenses.</p>
							<!--<a class="bt text-capitalize" href="about.html" role="button"> read more
								<i class="fas fa-angle-double-right"></i>--->
							</a>
						</div>
					</div>
				</li>
				<li>
					<div class="slider-info bg3">
						<div class="banner-text container">
							<h4 class="movetxt text-left mb-3 agile-title text-capitalize">Make Your Dreams Come True</h4>
							<p class="text-white mb-3">#DreamDegree.
							<!--<a class="bt text-capitalize" href="about.html" role="button"> read more
								<i class="fas fa-angle-double-right"></i>--->
							</a>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</section>
	<!-- //banner -->
	<!-- Products -->
	<section class="services py-5">
		<div class="container py-md-4 mt-md-3"> 
			<h2 class="heading-agileinfo">Loan Products We Offer <span>Speed Up the Loan Process</span></h2>
			<span class="w3-line black"></span>
			<div class="row inner_w3l_agile_grids-1 mt-md-5 pt-4">
				<div class="col-md-4 w3layouts_news_left_grid1">
					<div class="new_top">
						<i class="fas fa-home"></i>			
						<h3 class="mb-3 mt-3">1.Education Loans for Higher Studies</h3>
						<p>Undergraduate programs (B.A., B.Sc., B.Tech, etc.)

Postgraduate programs (M.A., M.Sc., M.Tech, MBA, etc.)

Professional and vocational courses (medical, engineering, law, etc.</p>
					</div>
				</div>
				<div class="col-md-4 w3layouts_news_left_grid2">
					<div class="new_top">
						<i class="fas fa-building"></i>
						<h3 class="mb-3 mt-3">2.International Education Loan</h3>
						<p>Loans in foreign currency to cover international tuition and living expenses.

Assistance with visa application fees and travel expenses.

Financing for GRE, GMAT, TOEFL, IELTS coaching, and other entrance exam costs.</p>
					</div>
				</div>
				<div class="col-md-4 w3layouts_news_left_grid3">
					<div class="new_top">
						<i class="fas fa-credit-card"></i>
						<h3 class="mb-3 mt-3">3.Loan Refinancing & Balance Transfer</h3>
						<p>Balance transfer services to reduce your interest burden.

Loan refinancing with lower interest rates and improved repayment terms.

Flexible EMI plans to help manage your finances efficiently.</p>
					</div>
				</div>
			</div>
			
	</div>   
</section>
<!-- //Products -->



<?php include_once('includes/footer.php');?>
	

<!-- js-->
	<script src="js/jquery-2.2.3.min.js"></script>
<!-- js-->
<!-- Banner Responsiveslides -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider3").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
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
<!-- // Banner Responsiveslides -->
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->
<!--pop-up-box -->
	<script src="js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});
		});
	</script>
	<!-- //pop-up-box -->
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js ">
	</script>
	<!-- //Bootstrap Core JavaScript -->
</body>
</html>