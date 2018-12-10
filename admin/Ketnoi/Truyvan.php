<?php
function so_luong_bai_viet()
{
      $sql = "SELECT COUNT(Id) as soluongtintuc FROM tintuc";
    return mysql_query($sql);

}
function canh_bao_tai_nan()
{
      $sql = "SELECT COUNT(Id) as canhbao FROM canhbao";
    return mysql_query($sql);

}

function danh_sach_tin()
{
      $sql = "SELECT * FROM tintuc";
    return mysql_query($sql);

}
function chi_tiet_tin_tuc($Id)
{
$sql = "SELECT * FROM tintuc WHERE Id='$Id'";
$row = mysql_query($sql);
return mysql_fetch_array($row);
}

function danh_sach_canh_bao()
{
      $sql = "SELECT * FROM canhbao";
    return mysql_query($sql);

}

function chi_tiet_canh_bao($ID)
{
$sql = "SELECT * FROM canhbao WHERE ID='$ID'";
$row = mysql_query($sql);
return mysql_fetch_array($row);
}

function danh_sach_luat_giao_thong()
{
      $sql = "SELECT * FROM luatgiaothong";
    return mysql_query($sql);

}
function chi_tiet_luat($Id)
{
$sql = "SELECT * FROM luatgiaothong WHERE Id='$Id'";
$row = mysql_query($sql);
return mysql_fetch_array($row);
}

?>