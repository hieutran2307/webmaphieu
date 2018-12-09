
<?php  
      function danh_sach_canh_bao(){
            $sql="SELECT * FROM canhbao ORDER by id DESC LIMIT 0,4"; 
        return mysql_query($sql); 
       } 


       function quangcao(){
        $sql="SELECT * FROM quangcao ORDER by id DESC LIMIT 0,3"; 
    return mysql_query($sql); 
   } 

   function tintuc(){
    $sql="SELECT * FROM tintuc ORDER by id DESC LIMIT 0,4"; 
return mysql_query($sql); 
} 

function chi_tiet_tin($Id)
{
    $sql="SELECT * FROM tintuc WHERE Id = $Id"; 
    return mysql_query($sql); 
}

  ?> 
  