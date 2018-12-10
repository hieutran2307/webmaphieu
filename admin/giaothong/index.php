<?php 
session_start();
require "../Ketnoi/Db.php";
require "../Ketnoi/Truyvan.php";
// kiem tra trang thai chua dang nhap
if(!isset( $_SESSION["Id"])){
	header('Location: ../index.php');
	require "../index.php";
}
?>
<html><head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Danh sách luật giao thông</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/font-awesome.min.css" rel="stylesheet">
	<link href="../css/datepicker3.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sidebar-collapse" aria-expanded="true"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">3 mins ago</small>
										<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">1 hour ago</small>
										<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br><small class="text-muted">12:27 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar collapse in" aria-expanded="true" style="">
	<!-- danh mục-->
	<?php require "../Block/danhmuc.php"  ?>
	<!----dong danh muc-->

		<div class="divider"></div>
	
		
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
			<ol class="breadcrumb">
				<li><a href="../home.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Home</li></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh sách luật giao thông</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="">
				<div class="panel panel-default articles">
					<div class="panel-heading">
						<a href="../giaothong/them.php"><button type="button"  class="btn btn-md btn-primary">Thêm mới</button></a>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"></span></div>
					<div class="panel-body articles-container">
						
						<?php 
							$ds_luat = danh_sach_luat_giao_thong();
							while ($row_dsluat = mysql_fetch_array($ds_luat))
							{
						?>
						<div class="article border-bottom">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-2 col-md-2 date">
										<div class="large">

                                   <img style="width:100px;height:100px;" src="../../HinhAnh/Luat/<?php echo $row_dsluat['HinhAnh'] ?>" alt="Italian Trulli">

                                        </div>
										
									</div>
									<div class="col-xs-10 col-md-10">
										<h4><a href="edit.php?Id=<?php echo $row_dsluat['Id'] ?>"><?php echo $row_dsluat['TIeuDe'] ?></a></h4>
										<p><?php echo $row_dsluat['NoiDung'] ?></p>
									</div>
									<h4><a href="xoa.php?Id=<?php echo $row_dsluat['Id'] ?>">Xóa</a></h4>
								</div>
							</div>
							<div class="clear"></div>
						</div><!--End .article-->
						<?php 
							}
						?>
					
						
				
					</div>
				</div><!--End .articles-->
				
				
				
				
			</div><!--/.col-->
			
			<div class="col-md-6">
				
				
				
			</div><!--/.col-->
			<div class="col-sm-12">
				<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	  

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	


</body></html>