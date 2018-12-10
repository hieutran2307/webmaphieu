<?php
include('DbConnect/Db.php');
		$qr = $mysqli->query("Select * from tintuc");
		while ($luat = $qr->fetch_object()){
			$ds_tintuc[] = $luat;
		}
		
		$luatgiaothong = $mysqli->query("Select * from luatgiaothong");
		while ($ds_luatgiaothong = $luatgiaothong->fetch_object()){
			$ds_luat[] = $ds_luatgiaothong;
		}
		$array = array('tintuc'=>$ds_tintuc, 'ds_luatgiaothong'=>$ds_luat);
		echo json_encode($array);
	
?>