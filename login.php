
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PPDB ONLINE</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/adminlte/bower/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/adminlte/bower/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/adminlte/bower/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/adminlte/dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page" style="background-color:   #FF1493">

  <div class="login-box">
    <div class="login-logo">
      <a href="#"><b style="color: #fff">PPDB ONLINE</b></a>
    </div>
    <?php if(!empty($_GET['ket'])):?>
      <div class="alert alert-dismissible alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Well done!</strong> You successfully Registration. Login Now</a>.
      </div>
    <?php endif;?>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <?php if($_POST) include'aksi.php';?>
      <form action="?act=login" method="post">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Username or Email" name="user" />
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password" name="pass">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-8">
            <a href="registrasi.php" class="btn btn-block btn-success btn-flat"></i> Register</a>
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      

    </div>
    <!-- /.login-box-body -->
  </div>



  <!-- /.login-box -->

  <!-- jQuery 3 -->
  <script src="assets/adminlte/bower/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="assets/adminlte/bower/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="../plugins/iCheck/icheck.min.js"></script>
</body>
</html>

