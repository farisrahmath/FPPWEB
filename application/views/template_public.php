 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="assets/image/icon.png">
   
    <meta name="description" content=" PPDB EAS">
    <meta name="author" content="Bagus">
    <!--<link rel="icon" href="../../favicon.ico">-->

    <title><?php echo $web->nama_web; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ; ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/navbar-fixed-top.css') ; ?>" rel="stylesheet">

    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo base_url('home'); ?>">APLIKASI PPDB</a>
              </div>

                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                      <div class="col-lg-4">
                        <li class="<?php if ($this->uri->segment('1') == 'Home') {echo 'active';} ?>">
                            <a href="<?php echo base_url('home'); ?>">Home</a>
                        </li>
                      </div>
                      <div class="col-lg-4">
                        <li class="<?php if ($this->uri->segment('1') == 'Daftar') {echo 'active';} ?>">
                            <a href="<?php echo base_url('daftar'); ?>">Daftar</a>
                        </li>
                      </div>
                      <div class="col-lg-4">
                        <li><a href="<?php echo base_url('login'); ?>">Login</a></li>
                      </div>
                    </ul>

                </div>
          </div>
        </div>
      </nav>

<div class="container">

      <?php $this->load->view($konten_public); ?>

      <br/><hr>
      <div class="footer">
        <a href="http://belajarweb.web.id/home">Belajar Web</a> &copy; Bagus Dharma <?php echo $web->tahun_web; ?> 
      </div>
</div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>">
    </script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url('assets/js/ie10-viewport-bug-workaround.js'); ?>">
    </script>
  </body>
</html>
