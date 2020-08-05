<?php
session_start();
include('header.php');
include('navbar.php');
include('code/connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$userid = $_SESSION['userid'];
//2. query ข้อมูลจากตาราง:
$sql = "SELECT shop.*,market.mk_name, market.mk_id FROM `shop`,`market` WHERE shop.mk_id=market.mk_id AND shop.user_id=$userid ";
$result = mysqli_query($conn, $sql);
echo"$sql";
$row = mysqli_fetch_array($result);
extract($row);

echo"$mk_name";

// echo"$shop_name";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>

  <form name="addmarket"  method="GET" class="form-horizontal">

  <input type="hidden" name="userid" value="<?php echo $userid; ?>">

    <div class="form-group">
      <div class="col-sm-2"> </div>
      <div class="col-sm-4" align="center">
        <br>
        <h4> ร้านค้าของฉัน </h4>

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
      <div class="col-sm-2" align="right"> ชื่อร้านค้า </div>
      <div class="col-sm-3" align="left">
        <input name="shop_name" type="text" required class="form-control" value="<?php echo $shop_name; ?>" disabled/>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-2" align="right"> รายละเอียดสินค้า </div>
      <div class="col-sm-3" align="left">
        <input name="shop_detail" type="text" required class="form-control" value="<?php echo $shop_detail; ?>" />
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-2" align="right"> รายชื่อตลาด </div>
      <div class="col-sm-3" align="left">
        <input name="mk_name" type="text" required class="form-control" value="<?php echo $mk_name; ?>" />
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-2" align="right"> เงื่อนไขการสั่งซื้อ </div>
      <div class="col-sm-3" align="left">
        <input name="shop_cd_condition" type="text" required class="form-control" value="<?php echo $shop_cd_condition; ?>" />
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-2" align="right"> ข้อมูลการติดต่อ </div>
      <div class="col-sm-3" align="left">
        <input name="shop_contact" type="text" required class="form-control" value="<?php echo $shop_contact; ?>"/>
      </div>
    </div>
  </form>

  
</body>

</html>



