<?php
//collection
include('DbConnect/Db.php');

	$limit = 3;
	$page = isset($_GET['page'])?$_GET['page']:1;
	settype($page, "int");
	$offset = ($page - 1) * $limit;

	$collection = $mysqli->query("SELECT * FROM tintuc  LIMIT $offset,$limit ");
	
	while ($row = $collection->fetch_object()){
	    $product[] = $row;
	}

	echo (json_encode($product));
	
?>