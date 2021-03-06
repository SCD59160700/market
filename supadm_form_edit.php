<?php
  session_start();
//1. เชื่อมต่อ database:
include('code/connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$userid = $_REQUEST["ID"];
//2. query ข้อมูลจากตาราง:
$sql = "SELECT * FROM user WHERE user_id ='$userid' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
extract($row);
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Tables</title>

  <!-- Custom fonts for this template -->
  <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="admin/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="admin/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>จัดการข้อมูล</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item active" href="superadm_list2.php">จัดการข้อมูลสมาชิก</a>
            <a class="collapse-item" href="blank.html">จัดการข้อมูลตลาด</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['user']; ?></span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Changes Password
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <div>
          <!-- Begin Page Content -->
          <div class="container-fluid">
            <div class="card o-hidden border-0 shadow-lg my-5">
              <div class="card-body p-0 ">
                <!-- Nested Row within Card Body -->
                <div class="row">
                  <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                  <div class="col-lg-7 mx-auto">
                    <div class="p-5 ">
                      <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">แก้ไขข้อมูล</h1>
                      </div>
                      <form class="user" action="code/supadm_form_edit_db2.php" method="POST">

                        <input type="hidden" name="userid" value="<?php echo $userid; ?>">

                        <div class="form-group row">
                          <div class="col-sm-6 mb-3 mb-sm-0">

                            <input name="username" type="text" class="form-control form-control" value="<?= $user_username; ?>" disabled>
                          </div>
                          <div class="col-sm-6">
                            <input name="password" type="password" class="form-control form-control" value="<?= $user_pass; ?>" disabled>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <input name="firstname" type="text" class="form-control form-control" value="<?= $user_fname; ?>" disabled>
                          </div>
                          <div class="col-sm-6">
                            <input name="lastname" type="text" class="form-control form-control" value="<?= $user_lname; ?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <input name="email" type="email" class="form-control form-control" value="<?= $user_email; ?>" disabled>
                        </div>
                        <div class="form-group ">
                          <!-- <div class="col-sm-6 mb-3 mb-sm-0"> -->
                          <input name="tel" type="text" class="form-control form-control" value="<?= $user_tel; ?>" disabled>

                          <!-- </div> -->
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-12" align="left">
                            <!-- <textarea name="address" class="form-control form-control" <?echo $user_address; ?> placeholder="Address" required></textarea> -->
                            <textarea type="text" name="address" class="form-control" id="address" disabled>  <?echo $user_address; ?> </textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-4" align="left">
                            <select name="type" class="form-control" value="<?= $user_type; ?>">
                              <option value="admin">admin</option>
                              <option value="superadmin">superadmin</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-4" align="left">
                            <select name="status" class="form-control" value="<?= $user_status; ?>">
                              <option value="active">active</option>
                              <option value="inactive">inactive</option>
                            </select>
                          </div>
                        </div>

                        <div class="form-group row">
                          <div class="col-sm-2 ml-auto" align="right"> </div>
                          <div class="col-sm-6 ml-auto" align="right">
                            <button type="submit" class="btn btn-success" id="btn"><span class="glyphicon glyphicon-ok"></span> แก้ไข </button>
                            <button type="submit" class="btn btn-primary" id="btnBack" formaction="superadm_list2.php">ย้อนกลับ</button>
                          </div>
                        </div>
                      </form>


                    </div>
                    <!-- /.container-fluid -->

                  </div>
                  <!-- End of Main Content -->

                  <!-- Footer -->
                  <!-- <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                      <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                      </div>
                    </div>
                  </footer> -->
                  <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

              </div>
              <!-- End of Page Wrapper -->

              <!-- Scroll to Top Button-->
              <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
              </a>

              <!-- Logout Modal-->
              <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                      <a class="btn btn-primary" href="code/logout.php">Logout</a>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Bootstrap core JavaScript-->
              <script src="admin/vendor/jquery/jquery.min.js"></script>
              <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

              <!-- Core plugin JavaScript-->
              <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

              <!-- Custom scripts for all pages-->
              <script src="admin/js/sb-admin-2.min.js"></script>

              <!-- Page level plugins -->
              <script src="admin/vendor/datatables/jquery.dataTables.min.js"></script>
              <script src="admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

              <!-- Page level custom scripts -->
              <script src="admin/js/demo/datatables-demo.js"></script>

</body>

</html>