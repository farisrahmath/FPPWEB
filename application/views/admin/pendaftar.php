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
        Pendaftar
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/home'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pendaftar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
              <div class="box">
                <div class="box-header">
                  
                   <h2 class="box-title">
                     <a href="<?php echo base_url('admin/pendaftar/insert_pendaftar'); ?>" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-plus"></i> Tambah Pendaftar</a>
                    </h2>
                    <h2 class="box-title">
                     <a href="<?php echo base_url('admin/pendaftar/cetak'); ?>" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-print"></i> Cetak Data</a>
                    </h2>
                </div><!-- /.box-header -->

                <div class="box-body table-responsive no-padding">
                
                  <table id="crud_data" class="table  table-striped table-hover">
                    <thead>
                        <th>ID Daftar</th>
                        <th>Nama Siswa</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Agama</th>
                        <th>Alamat</th>
                        <th>Asal Sekolah</th>
                        <th>No Telp</th>
                        <th>Nama Ayah</th>
                        <th>Nama Ibu</th>
                        <th>Action</th>
                    </thead>

                    <tbody>
                        
                        <?php foreach($daftar as $value) { ?>
                        <tr>
                          <td><?php echo $value->id_daftar; ?></td>
                          <td><?php echo $value->nama_siswa; ?></td>
                          <td><?php echo $value->jenis_kelamin_siswa; ?></td>
                          <td><?php echo $value->tgl_lahir_siswa; ?></td>
                          <td><?php echo $value->agama_siswa; ?></td>
                          <td><?php echo $value->alamat_siswa; ?></td>
                          <td><?php echo $value->asal_sekolah_siswa; ?></td>
                          <td><?php echo $value->no_hp_siswa; ?></td>
                          <td><?php echo $value->nama_ayah_siswa; ?></td>
                          <td><?php echo $value->nama_ibu_siswa; ?></td>

                          <td>
                            <div class="btn-group">
                                <span><a href="<?php echo base_url('admin/pendaftar/edit_pendaftar/'.$value->id_daftar); ?>" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></a> </span>
                                <span><a href="<?php echo base_url('admin/pendaftar/delete_pendaftar/'.$value->id_daftar); ?>" onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')" class="btn btn-xs btn-danger btn-flat"><i class="fa fa-trash"></i></a> </span>
                            </div>
                          </td>
                        </tr>
                        <?php } ?>
                        
                    </tbody>
                  </table>
                  
                </div><!-- /.box-body -->

             </div>
      </div>
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

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
      $('#crud_data').DataTable();
  } );
</script>

</body>
</html>
