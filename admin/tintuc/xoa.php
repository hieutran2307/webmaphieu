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
<?php 
$Id = $_GET["Id"];
settype($Id, "int");
$row_chi_tiet_tin_tuc = chi_tiet_tin_tuc($Id);
?>
<!--them tin-->
<?php
if(isset($_POST["btncapnhat"]))
{
$TieuDe = $_POST["TieuDe"];
$ThoiGian = $_POST["ThoiGian"];
 $NoiDung = $_POST["NoiDung"];
 $NoiDungChiTiet = $_POST["NoiDungChiTiet"];
$name = $_FILES["fileUpload"]["name"];
 $type = $_FILES["fileUpload"]["type"];
 $size = $_FILES["fileUpload"]["size"];
if( $size <= 5*1024*1024 ) {
	move_uploaded_file(
		$_FILES["fileUpload"]["tmp_name"],"../HinhAnh/TinTuc/$name");
  $sql ="DELETE FROM tintuc  WHERE Id='$Id'";
 
	mysql_query($sql);
	 header('Location: index.php');
 
}else{
	echo "FIle cua ban phai nho hon 5M";	
}
}
?>
<!--dong them tin-->
<html>
<head>
<link href="../css/Date/jquery-ui-1.8.2.custom.css" rel="stylesheet">
<script src="../css/Date/jquery.ui.core.js"></script>
<script src="../css/Date/jquery.ui.datepicker.js"></script>
<script src="../ckeditor/ckeditor.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino UI Elements</title>
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
	<script src="../ckeditor/ckeditor.js"></script>
	<script src="../ckfinder/ckfinder.js"></script>

	<!--ham goi chen hinh-->
	<script type="text/javascript">
function BrowseServer( startupPath, functionData ){
	var finder = new CKFinder();
	finder.basePath = '../ckfinder'; //Đường path nơi đặt ckfinder
	finder.startupPath = startupPath; //Đường path hiện sẵn cho user chọn file
	finder.selectActionFunction = SetFileField; // hàm sẽ được gọi khi 1 file được chọn
	finder.selectActionData = functionData; //id của text field cần hiện địa chỉ hình
	//finder.selectThumbnailActionFunction = ShowThumbnails; //hàm sẽ được gọi khi 1 file thumnail được chọn	
	finder.popup(); // Bật cửa sổ CKFinder
} //BrowseServer

function SetFileField( fileUrl, data ){
	document.getElementById( data["selectActionData"] ).value = fileUrl;
}
function ShowThumbnails( fileUrl, data ){	
	var sFileName = this.getSelectedFile().name; // this = CKFinderAPI
	document.getElementById( 'thumbnails' ).innerHTML +=
	'<div class="thumb">' +
	'<img src="' + fileUrl + '" />' +
	'<div class="caption">' +
	'<a href="' + data["fileUrl"] + '" target="_blank">' + sFileName + '</a> (' + data["fileSize"] + 'KB)' +
	'</div>' +
	'</div>';
	document.getElementById( 'preview' ).style.display = "";
	return false; // nếu là true thì ckfinder sẽ tự đóng lại khi 1 file thumnail được chọn
}
</script>

	<!--dong ham goi chen hinh-->
</head>
<body>
	<?php require "../Block/header.php" ?>
	<?php require "../Block/danhmuc.php" ?>
		
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
				<h1 class="page-header">Quản lý tin tức</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
		
				
				
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="">
						<form method="POST" enctype="multipart/form-data">
								<div class="form-group">
									<label>Tiêu Đề</label>
									<input disabled class="form-control" value="<?php echo $row_chi_tiet_tin_tuc['TieuDe'] ?>" name="TieuDe" id="TieuDe">
								</div>
								<div class="form-group">
									<label>Thời gian:</label>
									<input disabled class="form-control" value="<?php echo $row_chi_tiet_tin_tuc['ThoiGian'] ?>" type="date" name="ThoiGian" id="ThoiGian">

									<script>
									$(document).ready(function() {
$("#Ngay").ThoiGian({
numberOfMonths: 1,  dateFormat: 'dd/mm/yy',
monthNames: ['Một','Hai','Ba','Tư','Năm','Sáu','Bảy','Tám','Chín', 
'Mười','Mười một','Mười hai'] ,
monthNamesShort: ['Tháng1','Tháng2','Tháng3','Tháng4','Tháng5',
'Tháng6','Tháng7','Tháng8','Tháng9','Tháng10','Tháng11','Tháng12'] ,
dayNames: ['Chủ nhật', 'Thứ hai', 'Thứ ba', 'Thứ tư', 'Thứ năm',
 'Thứ sáu', 'Thứ bảy'],
dayNamesMin: ['CN', 'T2', 'T3', 'T4', 'T5', 'T6', 'T7'] ,
showWeek: true , showOn: 'both',
changeMonth: true , changeYear: true,
currentText: 'Hôm nay', weekHeader: 'Tuần'
});
});

									</script>
								</div>
								
								
								
								<input onclick="return confirm('Bạn Có muốn xóa hay không')" type="submit" name="btncapnhat" id="btncapnhat" value="Xóa" class="btn btn-lg btn-primary"></input>
							</form>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
			<div class="col-sm-12">
				<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
			</div>
		</div><!-- /.row -->
	</div><!--/.main-->
	
<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	
</body>
</html>
