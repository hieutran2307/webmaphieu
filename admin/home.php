<?php 
session_start();
require "./Ketnoi/Db.php";
require "./Ketnoi/Truyvan.php";
// kiem tra trang thai chua dang nhap
if(!isset( $_SESSION["Id"])){
	header('Location: ./index.php');
	require "./index.php";
}
?>
<?php 
// truy van so luong tin 
$soluongbaiviert = so_luong_bai_viet();
$row_so_luong_bai_viet = mysql_fetch_array($soluongbaiviert);
// canh bao 
$canbao = canh_bao_tai_nan();
$row_canh_bao = mysql_fetch_array($canbao);
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Dashboard</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

</head>
<body>
	<?php require "./Block/header.php" ?>
	<?php require "./Block/danhmuc.php" ?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">WebGiaoThong</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Thông tin</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
		<div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>TN TỨC</h4>
						<div class="easypiechart" id="easypiechart-blue" data-percent="92" ><span class="percent"><?php echo $row_so_luong_bai_viet['soluongtintuc'] ?></span></div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>CẢNH BÁO TAI NẠN</h4>
						<div class="easypiechart" id="easypiechart-orange" data-percent="65" ><span class="percent"><?php echo $row_canh_bao['canhbao'] ?></span></div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>NGƯỜI DÙNG</h4>
						<div class="easypiechart" id="easypiechart-teal" data-percent="56" ><span class="percent">56%</span></div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Visitors</h4>
						<div class="easypiechart" id="easypiechart-red" data-percent="27" ><span class="percent">27%</span></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->

				
		</div>
			  </div>
			
				
		  </div><!--/.row-->
		</div>
	
		
	
		
	
	

			
			<!--/.col-->
			<div class="col-sm-12">
				<p class="back-link">WebGiaoThong by <a href="https://www.medialoot.com">CNTT</a></p>
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
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>