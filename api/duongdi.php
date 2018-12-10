<?php
include('DbConnect/Db.php');
		$qr = $mysqli->query("Select * from addresses");
		while ($duongdi = $qr->fetch_object()){
			$ds_duongdi[] = $duongdi;
		}
		
		
		$array = array('duongdi'=>$ds_duongdi);
		echo json_encode($array);
	
?>