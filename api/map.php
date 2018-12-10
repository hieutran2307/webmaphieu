<?php
include('DbConnect/Db.php');
		$qr = $mysqli->query("Select * from CanhBao");
		while ($luat = $qr->fetch_object()){
			$ds_map[] = $luat;
		}
		
		
		$array = array('map'=>$ds_map);
		echo json_encode($array);
	
?>