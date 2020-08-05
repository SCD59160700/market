<?php
include('header.php');
//1. เชื่อมต่อ database:
include('code/connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$shop_id = $_REQUEST["ID"];
//2. query ข้อมูลจากตาราง:
$sql = "SELECT shop.*,market.mk_name, market.mk_id FROM `shop`,`market` WHERE shop.mk_id=market.mk_id AND shop.user_id=$userid ";
$result = mysqli_query($conn, $sql);
echo"$sql";
$row = mysqli_fetch_array($result);
extract($row);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>

  <form name="addmarket" action="code/user_form_add_db.php" method="POST" class="form-horizontal">

  <input type="hidden" name="shop_id" value="<?php echo $shop_id; ?>">

    <div class="form-group">
      <div class="col-sm-2"> </div>
      <div class="col-sm-4" align="center">
        <br>
        <h4> แก้ไขร้านค้าของฉัน </h4>

      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-2" align="right"> รูป </div>
      <div class="col-sm-3" align="left">
        <input type="file" name="image" value="<?php $image; ?>"/>
      </div>
    </div>

    <!-- <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" /> -->

    <div class="form-group">
      <div class="col-sm-2" align="right"> ชื่อร้านค้า </div>
      <div class="col-sm-3" align="left">
        <input name="shop_name" type="text" required class="form-control" value="<?= $shop_name; ?>"/>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-2" align="right"> รายละเอียดสินค้า </div>
      <div class="col-sm-3" align="left">
        <input name="shop_detail" type="text" required class="form-control" value="<?= $shop_detail; ?>"/>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-2" align="right"> รายชื่อตลาด </div>
      <div class="col-sm-3" align="left">
        <input name="mk_name" type="text" required class="form-control" value="<?= $mk_name; ?>"/>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-2" align="right"> เงื่อนไขการสั่งซื้อ </div>
      <div class="col-sm-3" align="left">
        <input name="shop_cd_condition" type="text" required class="form-control" value="<?= $shop_cd_condition; ?>"/>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-2" align="right"> ข้อมูลการติดต่อ </div>
      <div class="col-sm-3" align="left">
        <input name="shop_contact" type="text" required class="form-control" value="<?= $shop_contact; ?>" />
      </div>
    </div>
 
   

    <div class="form-group">
      <div class="col-sm-2"> </div>
      <div class="col-sm-6">
        <button type="submit" class="btn btn-success" id="btn"><span class="glyphicon glyphicon-ok"></span> แก้ไข </button>
      </div>

    </div>

  </form>
</body>

</html>