<?php
include'functions.php';
if(empty($_SESSION['username']))
  header("location:login.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PPDB ONLINE</title>
  
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="assets/adminlte/bower/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/adminlte/bower/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/adminlte/bower/datatables/css/dataTables.bootstrap.css">
  <link rel="stylesheet" href="assets/adminlte/bower/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/adminlte/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="assets/adminlte/dist/css/skins/_all-skins.min.css">
  <script src="assets/adminlte/bower/jquery/dist/jquery.min.js"></script>
  <style type="text/css">
    .form-horizontal .control-label {
      text-align: left;
    }
  </style>
</head>

<body class="hold-transition skin-red layout-top-nav">
  <div class="wrapper">

    <header class="main-header">
      <nav class="navbar navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <a href="#" class="navbar-brand"><b>PPDB ONLINE</b></a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
            <ul class="nav navbar-nav">
              <?php if($_SESSION['level']=='admin'):?>
                <li><a href="?m=siswa">DATA CALON SISWA</a></li>
                <li><a href="?m=user">INFORMASI USER</a></li>
                <li><a href="?m=siswa">INFORMASI PENDAFTARAN</a></li>
                <?php else:?>

                  <li><a href="?m=pendaftaran_tambah">FORM PENDAFTARAN<span class="sr-only">(current)</span></a></li>
                  <li><a href="?m=status">STATUS PENDAFTARAN</a></li>
                <?php endif;?>
                <li><a href="aksi.php?act=logout"><?=$_SESSION['username']?>(LOGOUT)</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container">
         <?php
         if(file_exists($mod.'.php'))
          include $mod.'.php';
         else
          include 'home.php';
        ?>
      </div>
      <!-- /.container -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="container">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2021 PPDB ONLINE All rights
        reserved.
      </div>
      <!-- /.container -->
    </footer>
  </div>

  <script src="assets/adminlte/bower/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="assets/adminlte/bower/datatables/js/jquery.dataTables.min.js"></script>
  <script src="assets/adminlte/bower/datatables/js/dataTables.bootstrap.js"></script>
  <script src="assets/adminlte/bower/chart.js/Chart.js"></script>
  <script src="assets/adminlte/bower/fastclick/lib/fastclick.js"></script>
  <script src="assets/adminlte/dist/js/adminlte.min.js"></script>
  <script src="assets/adminlte/dist/js/demo.js"></script>
</body>
</html>
