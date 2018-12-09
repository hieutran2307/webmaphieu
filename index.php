<?php 
require "./Db/Conn.php";
require "./Db/truyvan.php";
?>
<html class="no-js" lang="en">
    <head>
	<style>
  
      #map {
        height: 450px;
      }
      html, body {
        height: 450px;
        margin: 0;
        padding: 0;
        margin-left:10px;
        
      }
    </style>
       
		<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="welcome to codeglim">
		<meta name='copyright' content='codeglim'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">	
		
	
        <title>HỆ THỐNG MAP GIAO THÔNG  &minus;</title>		
		<link rel="icon" type="image/png" href="images/favicon.png">	
		
    
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,700,900" rel="stylesheet"> 

		
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM" type="text/javascript"></script>	
	
		
        <link rel="stylesheet" href="css/font-awesome.min.css">

	
        <link rel="stylesheet" href="css/animate.min.css">

	
        <link rel="stylesheet" href="css/slicknav.min.css">

		
		<link rel="stylesheet" href="css/owl.theme.default.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
		
		
		<link rel="stylesheet" href="css/magnific-popup.css">
		
		
        <link rel="stylesheet" href="css/bootstrap.min.css">
		
	
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/default.css">	
        <link rel="stylesheet" href="css/responsive.css">	
		
	
		<link rel="stylesheet" href="css/skin/green.css">
		
	
		<link rel="stylesheet" href="#" id="colors">
    </head>
    <body>
	
	
		<div class="loader">
			<div class="l-inner">
				<div class="k-spinner">
					<div class="k-bubble-1"></div>
					<div class="k-bubble-2"></div>
				</div>
			</div>
        </div>
		
	
		
		<!-- Start Header -->
		<?php require "/block/Header.php" ?>
		<!--/ End Header -->
		
		<!-- Start Slider -->
		<section id="j-slider">
			<div class="slide-main">
				<!-- Quang cao -->
				<?php 
			$qc = quangcao();
			while ($row_quang_Cao = mysql_fetch_array($qc)) {
				?>
				<div class="single-slider" style="background-image:url(/giaothongmap/HinhAnh/Banner/<?php echo $row_quang_Cao['HinhAnh'] ?>);" >
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-sm-12 col-xs-12">
								<!-- Quang cao text -->
								<div class="slide-text left">
									<div class="slider-inner">
										<h1><?php echo $row_quang_Cao['NoiDung'] ?></h1>
										
									</div>
								</div>
								<!--/ End Quang cao text -->
							</div>
						</div>
					</div>
				</div>

				<?php 
		} ?>
				<!--/ End Quang cao -->
			
			</div>
		</section>
		<!--/ End Slider -->
		
		<!-- Start Service -->
		<section id="service" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
						<div class="section-title center">
							<h2>CHÚNG TÔI <span>CUNG CẤP DỊCH VỤ</span></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- Single Service -->
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.4s">
						<div class="single-service">
							<i class="fa fa-location-arrow"></i>
							<h2>MAP</h2>
							<p>HỆ THỐNG DẪM ĐƯỜNG TỐI ỨU CHO CÁ NHÂN VÀ DOANH NGHIỆP</p>
						</div>
					</div>
					<!--/ End Single Service -->
					<!-- Single Service -->
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.6s">
						<div class="single-service">
							<i class="fa fa-exclamation-triangle"></i>
							<h2>CẢNH BÁO</h2>
							<p>HỆ THỐNG CẢNH BÁO GIÚP BẠN CẬP NHẬT TÌNH TRẠNG GIAO THÔNG LIÊN TỤC</p>
						</div>
					</div>
					<!--/ End Single Service -->
					<!-- Single Service -->
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.8s">
						<div class="single-service">
							<i class="fa fa-search"></i>
							<h2>TRA CỨU</h2>
							<p>HỆ THỐNG TRA CỨU LUẬT, GIÚP BẠN CẬP NHẬT LUẬT GIAO THÔNG</p>
						</div>
					</div>
					<!--/ End Single Service -->
					<!-- Single Service -->
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1s">
						<div class="single-service">
							<i class="fa fa-code"></i>
							<h2>TIN TỨC</h2>
							<p>CẬP NHẬT TIN TỨC GIAO THÔNG LIÊN TỤC</p>
						</div>
					</div>
					<!--/ End Single Service -->
				</div>
			</div>
		</section>
		<!--/ End Service -->
		
		<!-- Start About Us -->
		<section id="about-us" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
						<div class="section-title center">
							<h2>CẢNH BÁO<span> GIAO THÔNG</span></h2>
						</div>
					</div>
				</div>
				<div class="row"> <!-- About Image -->
					<div class="col-md-5 col-sm-12 col-xs-12 wow slideInLeft">
						<div class="about-main">

<div id="map"></div>
        <script>
function initMap() {
    var location = {lat: 10.806127,lng:  106.715950 };
    map = new google.maps.Map(document.getElementById('map'), {
        center: location,
        zoom: 15,
        mapTypeId: 'terrain'
    });

  // Create an array of alphabetical characters used to label the markers.
  var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

  // Add some markers to the map.
  // Note: The code uses the JavaScript Array.prototype.map() method to
  // create an array of markers based on a given "locations" array.
  // The map() method here has nothing to do with the Google Maps API.
  var markers = locations.map(function(location, i) {
    return new google.maps.Marker({
      position: location,
      label: labels[i % labels.length]
    });
  });

  // Add a marker clusterer to manage the markers.
  var markerCluster = new MarkerClusterer(map, markers,
      {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
}
var locations = [
  {lat: 10.806413, lng: 106.716032},
]
</script>

 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVSVCiGgd4YIOnMXLvtZU3HQfR8QoJ3zQ&callback=initMap"
            async defer></script>

</div>
					</div>
					<!--/ End About Image -->
					<div class="col-md-7 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay="1s">
						<!-- About Tab -->
						<div class="tabs-main">
							<!-- Tab Nav -->
							<ul class="nav nav-tabs" role="tablist">
							  <li role="presentation" class="active"><a href="#welcome" data-toggle="tab">CẢNH BÁO GIAO THÔNG</a></li>
							  <li role="presentation"></li>
							</ul>
							<!--/ End Tab Nav -->
							<!-- Tab Content -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="welcome">
<div class="row">
<?php 
$ds = danh_sach_canh_bao();
while ($row_ds_sach_canh_bao = mysql_fetch_array($ds)) {
	?>
				<div class="col-md-6 col-sm-6 col-xs-12 col-lg-12">
											<!-- Single Tab -->
											<div class="single-tab">
												<i class="fa fa-check"></i>
											  <h4>tuyến đường: <?php echo $row_ds_sach_canh_bao['TenDuong'] ?></h4>
												<p>Tình trạng <?php echo $row_ds_sach_canh_bao['TinhTrang'] ?></p>
											</div>
											<!--/ End Single Tab -->
				</div>
				<?php 
		}
		?>
				
</div>
							  </div>
							
						  </div>
					  </div>
					</div>
				</div>
			</div>
		</section>
	
		
	
		
		<!-- Start blog -->
		<section id="blog" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12  wow fadeIn">
						<div class="section-title center">
							<h2> TIN TỨC<span> GIAO THÔNG</span></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="blog">
						<?php 
					$tintuc = tintuc();
					while ($row_tin_tuc = mysql_fetch_array($tintuc)) {
						?>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<!-- Single blog -->
								<div class="single-blog">
									<div class="blog-head">
										<img src="HinhAnh/TinTuc/<?php echo $row_tin_tuc['HinhAnh'] ?>" alt="#">
										<a href="chitiettin.php?p=chitiettin&Id=<?php echo $row_tin_tuc['Id'] ?>" class="link"><i class="fa fa-link"></i></a>
									</div>
									<div class="blog-content">
										<h2><a href="chitiettin.php?p=chitiettin&Id=<?php echo $row_tin_tuc['Id'] ?>"><?php echo $row_tin_tuc['TieuDe'] ?></a></h2>
										<div class="meta">
											<span><i class="fa fa-user"></i>admin</span>
											<span><i class="fa fa-calendar"></i><?php echo $row_tin_tuc['ThoiGian'] ?></span>
										</div>
										<p><?php echo $row_tin_tuc['NoiDung'] ?></p>
										<a href="blog-single.html" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
									</div>
								</div>	
								
							</div>
							
						<?php 
				}
				?>
						</div>
						
					</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End blog -->

	
		
		<!-- Location -->
		<section id="location" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
						<div class="section-title center">
							<h2>THÔNG TIN <span> LIÊN HỆ </span></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-delay="0.4s">
						<!-- Single Address -->
						<div class="single-address">
							<i class="fa fa-phone"></i>
							<h4>ĐIỆN THOẠI</h4>
							<p> 0169 2307 840</p>
						</div>
						<!--/ End Single Address -->
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-delay="0.6s">
						<!-- Single Address -->
						<div class="single-address active">
							<i class="fa fa-mail"></i>
							<h4>ĐỊA CHỈ E-MAIL</h4>
							<p>tnhieu123@gmail.com</p>
						</div>
						<!--/ End Single Address -->
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-delay="0.8s">
						<!-- Single Address -->
						<div class="single-address">
							<i class="fa fa-phone"></i>
							<h4>LIÊN HỆ </h4>
							<p>475A ĐIỆN BIÊN PHỦ, BÌNH THẠNH</p>
						</div>
						<!--/ End Single Address -->
					</div>

				</div>
			</div>
		</section>
		<!--/ End Location -->

	
	<footer id="footer" class="wow fadeIn">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 ">
							<!-- Logo -->
							<div class="logo">
								<a href="index.html"><span>MAP </span> GIAO THÔNG</a>
							</div>	
							<!--/ End Logo -->
							<!-- Social -->
							<ul class="social">
								<li class="active"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>	
							<!--/ End Social -->
						
						</div>
					</div>
				</div>
			</div>
			<!--/ End Footer Top -->
			
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="text">
								<p>&copy; Copyright 2018<span><i class="fa fa-heart"></i></span>MAP GIAO THÔNG</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
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