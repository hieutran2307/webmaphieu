<?php 
require "./Db/Conn.php";
require "./Db/truyvan.php";
if( isset($_GET["Id"])){
	$Id= $_GET["Id"];
	settype($Id,"int");
}else{
	$Id =1;
}
$tin =chi_tiet_tin($Id);
$row_tin = mysql_fetch_array($tin);
?>

<html class="no-js" lang="en">
    <head>
        <!-- Meta tag -->
		<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="welcome to codeglim">
		<meta name='copyright' content='codeglim'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">	
		
		<!-- Title Tag -->
        <title>Bizpro  &minus; One Page Business and Corporate HTML Template</title>
		
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="images/favicon.png">	
		
        <!-- Google Font -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,700,900" rel="stylesheet"> 

		<!-- Google Map Api -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM" type="text/javascript"></script>	
	
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
		<div class="mp-color">
			<div class="icon inOut"><i class="fa fa-cog fa-spin"></i></div>
			<h4>Choose Layout</h4>
			<ul>
				<li><a href="index.html">Home Business</a></li>
				<li><a href="index2.html">Home Animate Text</a></li>
				<li><a href="index3.html">Home Video BG</a></li>
			</ul>
			<h4>Choose Color</h4>
			<span class="color1"></span>
			<span class="color2"></span>
			<span class="color3"></span>
			<span class="color4"></span>
			<span class="color5"></span>
			<span class="color6"></span>
			<span class="color7"></span>
			<span class="color8"></span>
		</div>
		<!--/ ENd Mp Color -->
		
		<!-- Start Header -->
		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-sm-12 col-xs-12">
						<!-- Logo -->
						<div class="logo">
							<a href="index.html"><span>M</span>izan</a>
						</div>
						<!--/ End Logo -->
					</div>
					<div class="col-md-8 col-sm-12 col-xs-12">
						<div class="nav-area">
							<!-- Main Menu -->
							<nav class="mainmenu">
								<div class="mobile-nav"></div>
								<div class="collapse navbar-collapse">
									<ul class="nav navbar-nav menu">
										<li class="active"><a href="#j-slider">Home</a>
											<ul class="sub-menu">
												<li><a href="index.html"><i class="fa fa-angle-double-right"></i>Home Business</a></li>
												<li><a href="index2.html"><i class="fa fa-angle-double-right"></i>Home Animation Tex</a></li>
												<li><a href="index3.html"><i class="fa fa-angle-double-right"></i>Home Video Background</a></li>
											</ul>
										</li>
										<li><a href="#about-us">About Us</a></li>
										<li><a href="#our-skill">Our Skill</a></li>
										<li><a href="#why-choose">Why Choose</a></li>
										<li><a href="#portfolio">Portfolio</a>
											<ul class="sub-menu">
												<li><a href="portfolio.html"><i class="fa fa-angle-double-right"></i>Portfolio Archive</a></li>
												<li><a href="portfolio-single.html"><i class="fa fa-angle-double-right"></i>Portfolio Single</a></li>
											</ul>
										</li>		
										<li><a href="#blog">Blog</a>
											<ul class="sub-menu">
												<li><a href="blog.html"><i class="fa fa-angle-double-right"></i>Blog Archive</a></li>
												<li><a href="blog-single.html"><i class="fa fa-angle-double-right"></i>Blog Single</a></li>
											</ul>
										</li>		
										<li><a href="#location">Contact</a></li>		
									</ul>
								</div>
							</nav>
							<!--/ End Main Menu -->
						</div>
					</div>
					<div class="col-md-2">
						<!-- Social -->
						<ul class="social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li class="active"><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
						<!--/ End Social -->
					</div>
				</div>
			</div>
		</header>
		<!--/ End Header -->
		
		<!-- Start Breadcrumbs -->
		<section id="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Blog Single</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li class="active"><a href="blog-single.html">Blog Single</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Breadcrumbs -->
		
		<!-- Start blog -->
		<section id="blog" class="single section page">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-12 col-xs-12">
						<!-- Single blog -->
						<div class="single-blog">
							<div class="blog-head">
								<img src="HinhAnh/TinTuc/<?php echo $row_tin['HinhAnh'] ?>" alt="#">
							</div>
							<div class="blog-content">
								<h3><a href="#"><?php echo $row_tin['TieuDe'] ?></a></h3>
								<div class="meta">
									<span><i class="fa fa-user"></i>admin</span>
									<span><i class="fa fa-time"></i><?php echo $row_tin['ThoiGian'] ?></span>
								</div>
								<p><?php echo $row_tin['NoiDungChiTiet'] ?></p>
							</div>
						</div>
						<!--/ End Single blog -->
						<!-- Comments -->
						
						<!--/ End Comments -->
					</div>
					<div class="col-md-4 col-sm-12 col-xs-12">
						<!-- Blog Sidebar -->
						<div class="blog-sidebar">
							<!-- Start Search Form -->
							<div class="single-sidebar form">
								<form class="search" action="#">
									<input type="text" placeholder="Type To Search">
									<div class="s-button">
										<input type="submit" value="search">
									</div>
								</form>
							</div>
						
						</div>
						<!--/ End Blog Sidebar -->
					</div>
				</div>
			</div>
			<div class="gmap">
				<div class="map"></div>
			</div>
		</section>
		
	
		
		<!-- Start Footer -->
		<?php require "Block/footer.php" ?>

		<!--/ End Footer -->

		<!-- Jquery JS -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		
		<!-- Colors JS -->
		<script type="text/javascript" src="js/colors.js"></script>
		
		<!-- Google Map JS -->
		<script  type="text/javascript" src="js/gmap.js"></script>
		
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