<?php
//1. เชื่อมต่อ database:
include('code/connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

$shop_id = $_REQUEST["ID"];
//2. query ข้อมูลจากตาราง:
$sql = "SELECT * FROM shop WHERE shop_id ='$shop_id' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
extract($row);
?>
<?php include('header.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body> 

  <form name="register" action="code/admshop_form_edit_db.php" method="POST" class="form-horizontal">
  
  <input type="hidden" name="shop_id" value="<?php echo $shop_id; ?>">

    <div class="form-group">
      <div class="col-sm-2"> </div>
      <div class="col-sm-4" align="center">
        <br>
        <h4> แก้ไขข้อมูลร้านค้า </h4>

      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-2" align="right"> ชื่อร้านค้า </div>
      <div class="col-sm-3" align="left">
        <input name="shop_name" type="text" required class="form-control" id="shop_name"  value="<?= $shop_name; ?>" disabled/>
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-2" align="right"> รายละเอียดร้านค้า </div>
      <div class="col-sm-3" align="left">
        <input name="shop_detail" type="text" required class="form-control" id="shop_detail" value="<?= $shop_detail; ?>" disabled/>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-2" align="right"> รายชื่อตลาด </div>
      <div class="col-sm-3" align="left">
        <input name="mk_id" type="text" required class="form-control" id="mk_id" value="<?= $mk_id; ?>" disabled/>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-2" align="right"> เงื่อนไขการสั่งซื้อ </div>
      <div class="col-sm-3" align="left">
        <input name="shop_cond" type="text" required class="form-control" id="shop_cond" value="<?= $shop_cd_condition; ?>" disabled/>
      </div>
    </div>

 
    <div class="form-group">
      <div class="col-sm-2" align="right"> ข้อมูลการติดต่อ </div>
      <div class="col-sm-3" align="left">
        <input name="shop_contact" type="text" class="form-control" id="shop_contact"  value="<?= $shop_contact; ?>" disabled/>
      </div>
    </div>
  
    <div class="select-list">
      <select name="status" value="<?= $shop_status; ?>" >
        <option value="active">active</option>
        <option value="inactive">inactive</option>
      </select> 
    </div>


    <div class="form-group">
      <div class="col-sm-2"> </div>
      <div class="col-sm-6">
        <button type="submit" class="btn btn-success" id="btn"><span class="glyphicon glyphicon-ok"></span> แก้ไข </button>
        <button type="submit" class="btn btn-danger" id="btnBack" formaction="code/admshop.php"> <span class="glyphicon glyphicon-remove"></span> ย้อนกลับ </button>
      </div>

    </div>

  </form>
</body>

</html>