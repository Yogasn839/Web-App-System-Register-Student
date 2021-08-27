   <section class="content-header">
    <h1>
      Home
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <?php if(!empty($_GET['ket'])):?>
      <div class="alert alert-dismissible alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Well done!</strong> You successfully Registration.</a>.
      </div>
    <?php endif;?>
    <?php if($_SESSION['level']=='admin'):?>
      <div class="row">
        <div class="col-md-4" >
          <a href="?m=siswa" class="btn btn-primary btn-lg btn-block" style="height: 210px;"><i class="fa fa-address-card fa-5x"></i>
            <br>DATA CALON SISWA</br>
          </a>
        </div>
        <div class="col-md-4">
          <a href="?m=siswa" class="btn btn-primary btn-lg btn-block" style="height: 210px;"><i class="fa fa-calendar-check-o fa-5x"></i><br>INFORMASI PENDAFTARAN</a>
        </div>
        <div class="col-md-4">
          <a href="?m=user" class="btn btn-primary btn-lg btn-block" style="height: 210px;"><i class="fa fa-book fa-5x"></i><br>INFORMASI USER</a>
        </div>
      </div>
      <?php else:?>
       <div class="row">
        <div class="col-md-6" >
          <a href="?m=pendaftaran_tambah" class="btn btn-primary btn-lg btn-block" style="height: 210px;"><i class="fa fa-address-card fa-5x"></i>
            <br>FORM PENDAFTARAN</br>
          </a>
        </div>
        <div class="col-md-6">
          <a href="?m=status" class="btn btn-primary btn-lg btn-block" style="height: 210px;"><i class="fa fa-calendar-check-o fa-5x"></i><br>STATUS PENDAFTARAN</a>
        </div>
      </div>
    <?php endif;?>
  </section>