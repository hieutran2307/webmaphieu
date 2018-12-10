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
?>