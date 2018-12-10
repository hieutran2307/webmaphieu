<?php
require "../connect/DbCon.php";
require "../connect/truyvan.php";
?>

<?php
$id = $_GET['id'];
// ép kiểu về dạng sô
settype($id, "int" );
$row_product_type = Chitiettheloai($id);
?>
<?php
if( isset($_POST ['btnxoa']) )
{
$delete =$_POST['xoa'];
  $sql ="UPDATE product_type SET      
        xoa ='$delete'
        WHERE id ='$id'
        ";
    mysql_query($sql);
    header('Location: index.php');
}
?>
<!-- chinh sua-->
<html>
<?php require "../blocks/head.php" ?>

<body class="hold-transition sidebar-mini">
<div class="wrapper">


  <?php require "../blocks/slidebar.php" ?>


  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý danh Mục Sản Phẩm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thông tin danh mục</h3>
              </div>            
              <!-- form up load du lieui  -->
              <form role="form"method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                  <?php
                      if(isset($error['fileUpload']))
                        {
                  ?>
                  <p class="thongbao"><?php  echo $error['fileUpload']?></p>
                  <?php
                        }
                    ?>
                    <br>
                    <label for="exampleInputEmail1">Tên Danh Mục</label>
                    <input  type="hidden" name="xoa" id="xoa" value="1"  class="form-control" id="exampleInputEmail1">
                    <input disabled   type="text" value="<?php echo $row_product_type ['name']  ?>"  class="form-control" id="exampleInputEmail1">
                  </div>
                
                  <div class="form-group">
                    <label for="exampleInputFile">Hình Ảnh</label>
                    <img class="hinhanh" src="../..//images/type/<?php  echo $row_product_type ['image'];?>"
                  </div>
                  
                  </div>
                </div>

                <div class="card-footer">
                  <button type="submit" name="btnxoa" id="btnxoa"  class="btn btn-primary">Xóa</button>
                </div>
              </form>
            </div>

         
           

          </div>
         
          <div class="col-md-6">
        
          
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php require "../blocks/footer.php" ?>

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>

<script src="../plugins/jquery/jquery.min.js"></script>
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../plugins/fastclick/fastclick.js"></script>
<script src="../dist/js/adminlte.min.js"></script>
<script src="../dist/js/demo.js"></script>
</body>
</html>