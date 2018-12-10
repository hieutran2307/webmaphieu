<?php
include('DbConnect/Db.php');
$json = file_get_contents("php://input");
$obj= json_decode($json, TRUE);

$HoVaTen =$obj["HOVATEN"];
$Email=$obj["EMAIL"];
$SoDienThoai=$obj["DIENTHOAI"];
$NoiDung=$obj["NOIDUNG"];

$qr = $mysqli->query("INSERT INTO PhanAnh VALUES (
    null,'$HoVaTen','$Email','$SoDienThoai','$NoiDung'
)");
//$result = mysqli_query($con,$qr);
?>