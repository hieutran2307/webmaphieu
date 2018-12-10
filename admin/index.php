<?php
session_start();
ob_start();
require "./Ketnoi/Db.php";
?>
<?php

// kiem tra dang nhap
 if(isset($_POST["btnlogin"]))
 {
   $TenDangNhap = $_POST["TenDangNhap"];
   $MatKhau = $_POST["MatKhau"];
   // truy van
   $sql ="
   SELECT * from admin
   where TenDangNhap ='$TenDangNhap'
   and MatKhau = '$MatKhau'
   ";
   $admin = mysql_query($sql);
   
   if(mysql_num_rows($admin)>0) {
     // dang nhap ddung
     $row = mysql_fetch_array($admin);
     $_SESSION["Id"] = $row ['Id'];
     $_SESSION["Name"] = $row ['HoVaTen'];
     $_SESSION["TenDangNhap"] = $row ['TenDangNhap'];
     header('Location:./home.php');
   }else{
    echo " <script> alert('Tên đăng nhập và mật khẩu không đúng, vui lòng thử lại') </script>";
   }
  
 }
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WebGiaoThong - Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
				<form method="post">
							<div class="form-group">
							<input type="txt" id= "TenDangNhap" name = "TenDangNhap" class="form-control" placeholder="Tên đăng nhập" required>
							</div>
							<div class="form-group">
							<input type="Password" id="MatKhau" name="MatKhau" class="form-control" placeholder="Mật khẩu" required>
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							<button  name="btnlogin" id ="btnlogin" type="submit" class="btn btn-primary btn-block btn-flat">Đăng Nhập</button>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
