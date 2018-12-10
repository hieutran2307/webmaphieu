<?php

$mysqli = mysqli_connect("localhost", "root", "", "appgt");
$mysqli->set_charset("utf8");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>