<?php 
?>
<html class="no-js" lang="en">
    <head>
			<link href="assets/css/main.css" rel="stylesheet" type="text/css"/>
			<link href="css/style.css" rel="stylesheet" type="text/css"/>
			<script src="assets/js/jquery.min.js" type="application/javascript"></script>
			<script src="assets/js/bootstrap.min.js" type="application/javascript"></script>
			<script src="js/library/go-debug.js" type="application/javascript"></script>
			<script src="js/main1.js" type="application/javascript"></script>
			<script src="js/dijkstras.js" type="application/javascript"></script>
			<script src="js/maps.js" type="application/javascript"></script>
			<script src="js/common.js" type="application/javascript"></script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVSVCiGgd4YIOnMXLvtZU3HQfR8QoJ3zQ&callback=initMap"
					async defer></script>

        <!-- Meta tag -->
		<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="welcome to codeglim">
		<meta name='copyright' content='codeglim'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">	
		
		<!-- Title Tag -->
		
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="images/favicon.png">	
		
        <!-- Google Font -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,700,900" rel="stylesheet"> 

		<!-- Google Map Api -->
	
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">

		<!-- Slicknav CSS -->
        <link rel="stylesheet" href="css/slicknav.min.css">

		<!-- Owl Carousel CSS -->
		<link rel="stylesheet" href="css/owl.theme.default.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
		
		<!-- Magnific Popup CSS -->
		<link rel="stylesheet" href="css/magnific-popup.css">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		
		<!-- Bizpro Style CSS -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/default.css">	
        <link rel="stylesheet" href="css/responsive.css">	
		
		<!-- You Can Use 8 Different color Just remove bottom of the comment tag -->
		
		<!--<link rel="stylesheet" href="css/skin/red.css">-->
		<!--<link rel="stylesheet" href="css/skin/amest.css">-->
		<!--<link rel="stylesheet" href="css/skin/yellow.css">-->
		<!--<link rel="stylesheet" href="css/skin/blaze.css">-->
		<!--<link rel="stylesheet" href="css/skin/blue.css">-->
		<!--<link rel="stylesheet" href="css/skin/orange.css">-->
		<!--<link rel="stylesheet" href="css/skin/green.css">-->
		<link rel="stylesheet" href="css/skin/green.css">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="#" id="colors">
    </head>
    <body>
	
		<!-- Preloader -->
		<div class="loader">
			<div class="l-inner">
				<div class="k-spinner">
					<div class="k-bubble-1"></div>
					<div class="k-bubble-2"></div>
				</div>
			</div>
        </div>
		<!--/ End Preloader -->
		
		<!-- Mp Color -->
	<?php require "/block/giaodien.php" ?>
		<!--/ ENd Mp Color -->
		
		<!-- Start Header -->
		<?php require "/block/Header.php" ?>
		<!--/ End Header -->
		
		<!-- Start Breadcrumbs -->
		<section id="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>MAP</h2>
						<ul>
							<li><a href="index.html">TRANG CHỦ</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Breadcrumbs -->
		
		<!-- Start blog -->
		<section id="blog" class="archive section page">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-12 col-xs-12">
						<div class="row">
							<div class="">
								<!-- Single blog -->
								<div class="">
									<div class="blog-head">
											<div style="width:700px;height:700px;"  id="map"></div>
									</div>
								
								</div>
								<!--/ End Single blog -->
							</div>
						
						</div>
					</div>
					<div class="col-md-4 col-sm-12 col-xs-12">
						<!-- Blog Sidebar -->
						<div class="blog-sidebar">
							<!-- Start Search Form -->
							<div class="single-sidebar form">
								<div class="search" id="defaultOpen">
										<div class="s-button">
												<input type="submit" value="Tìm kiếm" id="btnFindPath">
											</div>
											<br>
											<div class="form-group">
													<label for="from">Chọn điểm đi: </label>
													<select class="form-control" name="from" id="from_address"></select>
												</div>
												<div class="form-group">
														<label for="to">Chọn điểm đến: </label>
														<select class="form-control" name="to" id="to_address"></select>
													</div>
								</div>
							</div>
							<!--/ End Search Form -->
							<!-- Single Sidebar -->
						
							<!--/ End Single Sidebar -->
							<!-- Single Sidebar -->
						
							<!--/ End Single Sidebar -->
							
							<!-- Single Sidebar -->
						
							<!--/ End Single Sidebar -->
						</div>
						<!--/ End Blog Sidebar -->
					</div>
				</div>
		
			</div>
			<div class="gmap">
				<div class="map"></div>
			</div>
		</section>
		<!--/ End blog -->
		
		<!-- Start Clients -->
	
		<!--/ End Clients -->	
		
		<!-- Start Footer -->
	<?php require "Block/footer.php" ?>
		<!--/ End Footer -->

		<!-- Jquery JS -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		
		<!-- Colors JS -->
		<script type="text/javascript" src="js/colors.js"></script>
		
		<!-- Google Map JS -->
		
		<!-- Modernizr JS -->
		<script type="text/javascript"  src="js/modernizr.min.js"></script>
	
		<!-- Appear JS-->
		<script  type="text/javascript" src="js/jquery.appear.js"></script>

		<!-- Animate JS -->
    	<script  type="text/javascript" src="js/wow.min.js"></script>
		
		<!-- Onepage Nav JS -->
    	<script  type="text/javascript" src="js/jquery.nav.js"></script>
		
		<!-- Yt Player -->
		<script  type="text/javascript" src="js/ytplayer.min.js"></script>
	
		<!-- Popup JS -->
		<script type="text/javascript"  src="js/jquery.magnific-popup.min.js"></script>

		<!-- Typed JS -->
		<script  type="text/javascript" src="js/typed.min.js"></script>
		
		<!-- Scroll Up JS -->
		<script  type="text/javascript" src="js/jquery.scrollUp.min.js"></script>
		
		<!-- Slick Nav JS -->
		<script  type="text/javascript" src="js/jquery.slicknav.min.js"></script>
		
		<!-- Counterup JS -->
		<script  type="text/javascript" src="js/waypoints.min.js"></script>
		<script  type="text/javascript" src="js/jquery.counterup.min.js"></script>
		
		<!-- Owl Carousel JS -->
		<script  type="text/javascript" src="js/owl.carousel.min.js"></script>
		
		<!-- Bootstrap JS -->
		<script  type="text/javascript" src="js/bootstrap.min.js"></script>
		
		<!-- Main JS -->
		<script type="text/javascript"  src="js/main.js"></script>
    </body>
</html>