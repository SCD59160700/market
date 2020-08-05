<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- <a class="navbar-brand" href="index.php">Mamarket</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="superadm.php">จัดการข้อมูลสมาชิก <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="supmarket.php">จัดการข้อมูลตลาด</a>
      </li>
  </div>
  <div>
    <ul class="nav navbar-nav navbar-right">
      <li class="nav-item"><a class="nav-link"><?php echo $_SESSION['user']; ?></a></li>
      <li class="nav-item"><a class="nav-link" href="logout.php">ออกจากระบบ</a></li>
    </ul>
  </div>
</nav>