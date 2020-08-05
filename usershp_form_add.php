<?php
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

  <form name="addmarket" action="usershp_form_add_db.php" method="POST" class="form-horizontal">
    <div class="form-group">
      <div class="col-sm-2"> </div>
      <div class="col-sm-4" align="center">
        <br>
        <h4> เพิ่มร้านค้าของฉัน </h4>

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
        <input name="shop_name" type="text" required class="form-control" />
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-2" align="right"> รายละเอียดสินค้า </div>
      <div class="col-sm-3" align="left">
        <input name="shop_detail" type="text" required class="form-control" />
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-2" align="right"> รายชื่อตลาด </div>
      <select name="mk_id" id="mk_id">
      <option>กรุณาเลือกตลาด</option>
        <?php
        $sql = "select * from market";
        $dbquery = mysqli_query($conn,$sql);
        while($rw = mysqli_fetch_array($dbquery)){?>
        <option value="<?=$rw['mk_id']?>"><?=$rw['mk_name']?></option>
        <? }?>
    </select>

    </div>
    <div class="form-group">
      <div class="col-sm-2" align="right"> เงื่อนไขการสั่งซื้อ </div>
      <div class="col-sm-3" align="left">
        <input name="shop_cd_condition" type="text" required class="form-control" />
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-2" align="right"> ข้อมูลการติดต่อ </div>
      <div class="col-sm-3" align="left">
        <input name="shop_contact" type="text" required class="form-control" />
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