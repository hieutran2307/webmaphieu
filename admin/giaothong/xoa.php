<?php 
session_start();
	require "../Ketnoi/Db.php";
	require "../Ketnoi/Truyvan.php";
 //kiem tra trang thai chua dang nhap
 if(!isset( $_SESSION["Id"])){
 	header('Location: ../index.php');
 	require "../index.php";
 }
?>
<?php 
$Id = $_GET["Id"];
settype($Id, "int");
$row_chi_tiet_luat = chi_tiet_luat($Id);
?>
<!--them tin-->
<?php
if(isset($_POST["btncapnhat"]))
{
$PhuongTien = $_POST["PhuongTien"];
$TIeuDe = $_POST["TIeuDe"];
 $NoiDung = $_POST["NoiDung"];
 $MucPhat = $_POST["MucPhat"];
 $NghiDinh = $_POST["NghiDinh"];
$name = $_FILES["fileUpload"]["name"];
 $type = $_FILES["fileUpload"]["type"];
 $size = $_FILES["fileUpload"]["size"];
if( $size <= 5*1024*1024 ) {
	move_uploaded_file(
		$_FILES["fileUpload"]["tmp_name"],"../../HinhAnh/Luat/$name");
   echo $sql ="DELETE FROM luatgiaothong  WHERE Id='$Id'";
 
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
									<label>Điều luật</label>
									<input class="form-control" name="TIeuDe" id="TIeuDe" value="<?php echo $row_chi_tiet_luat['TIeuDe'] ?>">
								</div>
								<div class="form-group">
									<label>Phương tiện</label>
									<input class="form-control" name="PhuongTien" id="PhuongTien" value="<?php echo $row_chi_tiet_luat['PhuongTien'] ?>">
                                </div>

                                <div class="form-group">
                                <input type="file" class="custom-file-input" name="fileUpload" value="<?php echo $row_chi_tiet_luat['name'] ?>" />

                                </div>
                                
								<div class="form-group">
									<label>Nội Dung</label>
									<textarea name="NoiDung" id="NoiDung" class="form-group" ><?php echo $row_chi_tiet_luat['NoiDung'] ?></textarea>
									<script type="text/javascript">
var editor = CKEDITOR.replace( 'NoiDung',{
	uiTIeuDe : '#9AB8F3',
	language:'vi',
	skin:'v2',
	filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?Type=Images',
filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?Type=Flash',
filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
			 	
	toolbar:[
	['Source','-','Save','NewPage','Preview','-','Templates'],
	['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print'],
	['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
	['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField'],
	['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
	['NumberedList','BulletedList','-','Outdent','Indent','Blockquote','CreateDiv'],
	['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
	['Link','Unlink','Anchor'],
	['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'],
	['Styles','Format','Font','FontSize'],
	['TextTIeuDe','BGTIeuDe'],
	['Maximize', 'ShowBlocks','-','About']
	]
});		
</script>
								</div>
								
                                <div class="form-group">
									<label>Mức phạt</label>
									<input class="form-control" name="MucPhat" id="MucPhat" value="<?php echo $row_chi_tiet_luat['MucPhat'] ?>">
                                </div>
                                <div class="form-group">
									<label>Nghị định</label>
									<input class="form-control" name="NghiDinh" id="NghiDinh" value="<?php echo $row_chi_tiet_luat['NghiDinh'] ?>">
								</div>
								<input type="submit" name="btncapnhat" id="btncapnhat" value="Xóa" class="btn btn-lg btn-primary">
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
