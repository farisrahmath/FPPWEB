<!DOCTYPE html>
<html>
<?php $this->load->view('admin/head'); ?>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 <?php $this->load->view('admin/header'); ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('admin/leftbar'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Pendaftar
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/home'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url('admin/pendaftar'); ?>"> Pendaftar</a></li>
         <li class="active">Edit Pendaftar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

    <?php 
      if($this->session->flashdata('berhasil_simpan')) { ?>

      <div class="alert alert-success">
         <strong>SUKSES !!</strong> <br/>Data Pendaftar Telah di Update
      </div>

    <?php } ?>


  <form  method="post" action="<?php echo base_url('admin/pendaftar/aksi_update/'.$data_edit[0]->id_daftar); ?>" class="form-horizontal">
    <div class="form-group">
      <label class="col-sm-2">Nama</label>
      <div class="col-sm-4">
        <input type="text" name="nama_siswa" class="form-control" value="<?php echo $data_edit[0]->nama_siswa ?>" required="" autofocus>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-2">Jenis Kelamin</label>
      <div class="col-sm-4">
        <select name="jenis_kelamin_siswa" class="form-control" required="">
          <option value="<?php echo $data_edit[0]->jenis_kelamin_siswa ?>"><?php echo $data_edit[0]->jenis_kelamin_siswa ?></option>
          <option value="Pria">Pria</option>
          <option value="Wanita">Wanita</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-2">Tanggal Lahir</label>
      <div class="col-sm-4">
        <input type="date" name="tgl_lahir_siswa" class="form-control" value="<?php echo $data_edit[0]->tgl_lahir_siswa ?>" required="">
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-2">Agama</label>
      <div class="col-sm-4">
        <select name="agama_siswa" class="form-control" required="">
          <option value="<?php echo $data_edit[0]->agama_siswa ?>"><?php echo $data_edit[0]->agama_siswa ?></option>
          <option value="Hindu">Hindu</option>
          <option value="Islam">Islam</option>
          <option value="Katolik">Katolik</option>
          <option value="Budha">Budha</option>
          <option value="Konghuchu">Konghuchu</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-2">Alamat</label>
      <div class="col-sm-4">
        <textarea name="alamat_siswa" class="form-control" value="<?php echo $data_edit[0]->alamat_siswa ?>" placeholder="Isi Alamat Anda" required=""><?php echo $data_edit[0]->alamat_siswa ?></textarea>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-2">Asal Sekolah</label>
      <div class="col-sm-4">
        <input type="text" name="asal_sekolah_siswa" class="form-control" value="<?php echo $data_edit[0]->asal_sekolah_siswa ?>" required="">
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-2">No Telp.</label>
      <div class="col-sm-4">
        <input type="number" name="no_hp_siswa" class="form-control" value="<?php echo $data_edit[0]->no_hp_siswa ?>" required="">
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-2">Nama Ayah</label>
      <div class="col-sm-4">
        <input type="text" name="nama_ayah_siswa" class="form-control" value="<?php echo $data_edit[0]->nama_ayah_siswa ?>" required="">
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-2">Nama Ibu</label>
      <div class="col-sm-4">
        <input type="text" name="nama_ibu_siswa" class="form-control" value="<?php echo $data_edit[0]->nama_ibu_siswa ?>" required="">
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-4">
        <input type="submit" value="Update" class="btn btn-success">
        <input type="reset" value="Reset" class="btn btn-danger">
      </div>
    </div>
</form>
    <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

   <?php $this->load->view('admin/footer'); ?>

  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/template/bower_components');?>/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/template/bower_components');?>/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/template/bower_components');?>/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/template/dist');?>/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/template/bower_components');?>/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="<?php echo base_url('assets/template/plugins'); ?>/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url('assets/template/plugins'); ?>/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('assets/template/bower_components');?>/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('assets/template/bower_components');?>/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/template/dist');?>/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/template/dist');?>/js/demo.js"></script>
</body>
</html>
