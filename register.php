<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Government Girls Polytechnic- Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />-->


  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Pricing -->
	<link rel="stylesheet" href="css/pricing.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div class="container-fluid">
		<?php

		include("header.php");

		?>
	</div>
	<!--End of navigation menu--> 
    <!--End of Header of Body-->
	<!--form-->
		<div class="container">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
		                 <center><h1>Register Now</h1></center>
                        <form action="regcode.php" method="post">
						<div class="form-group">
							Name: <input type="text" name="name" class="form-control" placeholder="Your Name">
                         </div>
						 <div class="form-group">
						Trade: <input type="text" name="trade" class="form-control" placeholder="Your Trade">
						</div>
						 <div class="form-group">
							Enrollment Number: <input type="text" name="eno" class="form-control" placeholder="Your Enrollment Number">
                         </div>
						<div class="form-group">
							Email ID: <input type="email" name="email" class="form-control" placeholder="Your Email ID">
                         </div>
                        <div class="form-group">
							Date of Birth: <input type="date" name="dob" class="form-control">
                        </div>
						<div class="form-group">
							Father's Name: <input type="text" name="fname" class="form-control" placeholder="Your Father's Name">
                         </div>
						 <div class="form-group">
							Mobile Number: <input type="number" name="mob" class="form-control" placeholder="Your Mobile Number">
                         </div>
						<center><div class="form-group">
							<input type="submit" value="Register" class="btn btn-primary">
						</div></center>
					   </form>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</div>
	
	<!--form-->
        <!--Footer info-->
		<?php
			include("footer.php");
			
		?>
        <!--End of footer-->
        <!--Go to top-->
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	   <!--End of goto top-->
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Count Down -->
	<script src="js/simplyCountdown.js"></script>
	<!-- Main javascript -->
	<script src="js/main.js"></script>
	<script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
	</script>
    <!--End of javascript-->
	</body>
</html>
