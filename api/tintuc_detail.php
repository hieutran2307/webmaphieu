<?php
	include('DbConnect/Db.php');
	$id = $_GET['id'];

	$luat = $mysqli->query("SELECT p.Id,p.TieuDe as TenTinTuc,p.HinhAnh,p.NoiDungChiTiet FROM tintuc p  where p.Id=$id");
	while ($row = $luat->fetch_object()){		
	    $luat_chittiet[] = $row;
	}
	echo json_encode($luat_chittiet);


?>
