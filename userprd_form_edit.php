<?php
//1. เชื่อมต่อ database:
include('code/connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$prd_id = $_REQUEST["ID"];
//2. query ข้อมูลจากตาราง:
$sql = "SELECT * FROM product WHERE prd_id ='$prd_id' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
extract($row);

include('header.php');
include('code/connect.php')
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>

  <form name="addproduct" action="code/userprd_form_edit_db.php" method="POST" class="form-horizontal">

  <input type="hidden" name="prd_id" value="<?php echo $prd_id; ?>">


    <div class="form-group">
      <div class="col-sm-2"> </div>
      <div class="col-sm-4" align="center">
        <br>
        <h4> เพิ่มร้านสินค้าของฉัน </h4>

      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-2" align="right"> รูป </div>
      <div class="col-sm-3" align="left">
        <input type="file" name="image" />
      </div>
    </div>

    <!-- <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" /> -->

    <div class="form-group">
      <div class="col-sm-2" align="right"> ชื่อสินค้า </div>
      <div class="col-sm-3" align="left">
        <input name="prd_name" type="text" required class="form-control" value="<?= $prd_name; ?>"/>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-2" align="right"> รายละเอียดสินค้า </div>
      <div class="col-sm-3" align="left">
        <input name="prd_detail" type="text" required class="form-control" value="<?= $prd_detail; ?>" />
      </div>
    </div>
   
    <div class="form-group">
      <div class="col-sm-2" align="right"> จำนวน </div>
      <div class="col-sm-3" align="left">
        <input name="prd_stock" type="number" required class="form-control" value="<?= $prd_stock; ?>" />
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-2" align="right"> ราคา </div>
      <div class="col-sm-3" align="left">
        <input name="prd_price" type="text" required class="form-control" value="<?= $prd_price; ?>" />
      </div>
    </div>
 
   

    <div class="form-group">
      <div class="col-sm-2"> </div>
      <div class="col-sm-6">
        <button type="submit" class="btn btn-success" id="btn"><span class="glyphicon glyphicon-ok"></span> เพิ่ม </button>
      </div>

    </div>

  </form>
</body>

</html>