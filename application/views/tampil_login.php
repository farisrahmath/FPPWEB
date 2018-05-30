<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="assets/image/icon.png">
 
    <meta name="description" content="">
    <meta name="author" content="">
   
    <title><?php echo $title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?> " rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/signin.css') ?>" rel="stylesheet">

    <script src="<?php echo base_url('assets/js/ie-emulation-modes-warning.js') ?>"></script>

  </head>

  <body>

    <div class="container center">
        <?php echo form_open(base_url('login/aksilogin'), 'class="form-signin"'); ?>
          <div class="panel panel-primary">
              <div class="panel-heading">
                  <h3 class="form-signin-heading text-center"><?php echo $title; ?></h3>
                  <center>
                      <a href="<?php echo base_url('beranda'); ?>" style="color:#fff; text-decoration: none;">
                        <?php echo $web->nama_web; ?>
                      </a>
                  </center>
              </div>
              <div class="panel-body">
                <?php if ($this->session->flashdata('gagal_login')) { ?>
                      <div class="alert alert-danger">
                       <strong>GAGAL LOGIN !!</strong> harap pastikan id user / password yang anda masukkan benar
                      </div>
                <?php } ?>

                  <label for="id_user" class="sr-only">ID User</label>
                  <input type="text" id="id_user" class="form-control" placeholder="ID User" name="id_user" required autofocus>
                  <br>
                  <label for="Password" class="sr-only">Password</label>
                  <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
                  <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Masuk</button>
              </div>
          </div>
        <?php echo form_close(); ?>
    </div> <!-- /container -->

    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
  </body>
</html>
