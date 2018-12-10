<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
       
		<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="welcome to codeglim">
		<meta name='copyright' content='codeglim'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">		
        <title> HỆ THỐNG MAP GIAO THÔNG  &minus;</title>
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
	
	<?php require "/block/giaodien.php" ?>
	<?php require "/block/Header.php" ?>
		<section id="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Tra Cứu Luật</h2>
						
					</div>
				</div>
			</div>
		</section>
	
		<section id="blog" class="archive section page">
			<div class="container">
				<div class="row">
				
					<div class="">
					
						<div class="blog-sidebar">
						
							<div class="single-sidebar form">
								<form class="search" action="#">
									<input type="text" name="search_text" id="search_text" placeholder="Tra cứu thông tin luật"/>
									<div class="s-button">
										<input type="submit" value="Tim Kiếm">
									</div>
								</form>
							</div>
							
							<div class="single-sidebar latest">
								<h2>Thông tin luật</h2>
								
								<div class="single-post">
									<div class="post-info">
                                    <div id="result"></div>
									</div>
								</div>
						
							</div>
							
						</div>
					
					</div>
				</div>
			
            
			</div>
			<div class="gmap">
				<div class="map"></div>
			</div>
		</section>
	
		<div id="clients">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="clients-carousel">
							
							<div class="single-client">
								<img src="images/client1.png" alt="" class="img-responsive">
							</div>
						
							<div class="single-client">
								<img src="images/client2.png" alt="" class="img-responsive">
							</div>
						
							<div class="single-client">
								<img src="images/client3.png" alt="" class="img-responsive">
							</div>
							
							<div class="single-client">
								<img src="images/client4.png" alt="" class="img-responsive">
							</div>
							
							<div class="single-client">
								<img src="images/client5.png" alt="" class="img-responsive">
							</div>
						
							<div class="single-client">
								<img src="images/client6.png" alt="" class="img-responsive">
							</div>		
						
						</div>
					</div>
				</div>
			</div>
		</div>
		
	<?php require "/block/footer.php" ?>
		
		<script type="text/javascript" src="js/jquery.min.js"></script>
		
		
		<script type="text/javascript" src="js/colors.js"></script>
		
		
		<script  type="text/javascript" src="js/gmap.js"></script>
		
	
		<script type="text/javascript"  src="js/modernizr.min.js"></script>
	
		
		<script  type="text/javascript" src="js/jquery.appear.js"></script>

		
    	<script  type="text/javascript" src="js/wow.min.js"></script>
		
		
    	<script  type="text/javascript" src="js/jquery.nav.js"></script>
		
		
		<script  type="text/javascript" src="js/ytplayer.min.js"></script>
	

		<script type="text/javascript"  src="js/jquery.magnific-popup.min.js"></script>

		
		<script  type="text/javascript" src="js/typed.min.js"></script>
		

		<script  type="text/javascript" src="js/jquery.scrollUp.min.js"></script>
		
	
		<script  type="text/javascript" src="js/jquery.slicknav.min.js"></script>
		
		
		<script  type="text/javascript" src="js/waypoints.min.js"></script>
		<script  type="text/javascript" src="js/jquery.counterup.min.js"></script>
		
	
		<script  type="text/javascript" src="js/owl.carousel.min.js"></script>
		
	
		<script  type="text/javascript" src="js/bootstrap.min.js"></script>
		
		<script type="text/javascript"  src="js/main.js"></script>

        <script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"fetch.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
</script>
    </body>
</html>