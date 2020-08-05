<?php
session_start();
 
$userid = $_SESSION['userid'];
$usertype = $_SESSION['usertype'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php include('header.php'); ?>
  <?php include('code/connect.php'); ?>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Mamarket</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php echo "$userid"; ?>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <?php
          
          if ($userid == null ) {

            echo "<script>";
            echo "alert(\/ user หรือ  password ไม่ถูกต้อง\");";
            // echo "window.history.back()";
            echo "</script>";

            echo  "<a class=\"nav-link\" href=\"register2.php\">สมัครสมาชิก <span class=\"sr-only\">(current)</span></a></li>";
            echo  "<li class=\"nav-item\"><a class=\"nav-link\" href=\"login1.php\">เข้าสู่ระบบ</a></li>";
          } else if ($userid != null && $usertype == 'user') {
            $query = "SELECT * FROM shop WHERE user_id ='$userid' ";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) == 1) {
              echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"usershp_show.php\">ร้านของฉัน</a></li>";
              // echo"<a class=\"nav-link\" href=\"../usershp_show.php\">ร้านของฉัน</a>";
            } else {
              echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"usershp_form_add.php\">เพิ่มร้านค้า</a></li>";
              # echo"<a class=\"nav-link\" href=\"../usershp_form_add.php\">เพิ่มร้านค้า</a>";

            }
            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"userprd.php\">ข้อมูลสินค้า</a></li>";
            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"#userprd.php\">ข้อมูลใบสั่งซื้อ</a></li>";
            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"#userprd.php\">รายงาน</a></li>";
            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"#userprd.php\">ประวัติการซื้อ</a></li>";
          } 
          // else if ($userid != null && $usertype == 'admin') {
          //   echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"code/admshop.php\">จัดการข้อมูลร้านค้า</a></li>";
          // } else if ($userid != null && $usertype == 'superadmin') {

          //   echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"code/superadm.php\">จัดการข้อมูลสมาชิก</a></li>";
          //   echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"supmarket.php\">จัดการข้อมูลตลาด</a></li>";
            
          // }

          ?>
          <div class="nav navbar-nav navbar-right">
            <ul class="nav navbar-nav navbar-right">
              <li class="nav-item"><a class="nav-link"><?php echo $_SESSION['user']; ?></a></li>
              <li class="nav-item"><a class="nav-link" href="code/logout.php">ออกจากระบบ</a></li>
            </ul>
          </div>
    </div>
  </nav>
</body>

</html>