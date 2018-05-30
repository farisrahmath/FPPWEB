<div class="jumbotron">
	<img src="<?php echo base_url('assets/image/Aplikasi PPDB Online.png'); ?>" width="100%" alt="<?php echo $web->slogan_web; ?>">
	<h1> Selamat Datang di <?php echo $web->nama_web; ?></h1>
	<br/><?php echo $web->slogan_web; ?>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="panel-group">
			
				<div class="col-lg-4">
					<div class="panel panel-info">
						<div class="panel-heading"><h2>Alamat</h2></div>
						<div class="panel-body"><p><?php echo $web->alamat_web; ?></p></div>
					</div>
				</div>


				<div class="col-lg-4">
					<div class="panel panel-info">
						<div class="panel-heading"><h2>Kontak</h2></div>
						<div class="panel-body">
							<p>Telepon : <?php echo $web->telp_web; ?> 
							<br> Fax : <?php echo $web->fax_web; ?> 
							<br> Email : <?php echo $web->email_web; ?>
							</p>
						</div>
					</div>
				</div>


			<div class="col-lg-4">
				<div class="panel panel-info">
					<div class="panel-heading"><h2>About <?php echo $web->nama_web; ?></h2></div>
					<div class="panel-body"><p><?php echo $web->deskripsi_web; ?></p></div>
				</div>
			</div>


		</div>
	</div>
</div>