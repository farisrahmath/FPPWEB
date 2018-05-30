<h2><?php echo $title; ?></h2>
<hr>
<?php 
	if($this->session->flashdata('berhasil_simpan')) { ?>

		<div class="alert alert-success">
 			 <strong>SUKSES !!</strong> <br/>Data Pendaftar Telah Tersimpan
		</div>

<?php } ?>

<?php echo form_open(base_url('daftar'), 'class="form-horizontal"' ); ?>
	<div class="form-group">
		<label class="col-sm-2">Nama</label>
		<div class="col-sm-4">
			<input type="text" name="nama_siswa" class="form-control" placeholder="Isi Nama Anda" required="" autofocus>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2">Jenis Kelamin</label>
		<div class="col-sm-4">
		<select name="jenis_kelamin_siswa" class="form-control" required="">
			<option value=""></option>
          <option value="Pria">Pria</option>
          <option value="Wanita">Wanita</option>
        </select>
    </div>
	</div>

	<div class="form-group">
		<label class="col-sm-2">Tanggal Lahir</label>
		<div class="col-sm-4">
			<input type="date" name="tgl_lahir_siswa" class="form-control" required="">
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2">Agama</label>
		<div class="col-sm-4">
			<select name="agama_siswa" class="form-control" required="">
				<option></option>
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
  			<textarea name="alamat_siswa" class="form-control" placeholder="Lengkapi Alamat Anda" required=""></textarea>
  		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2">Asal Sekolah</label>
		<div class="col-sm-4">
			<input type="text" name="asal_sekolah_siswa" class="form-control" placeholder="Isi Asal Sekolah Anda" required="">
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2">No Telp.</label>
		<div class="col-sm-4">
			<input type="number" name="no_hp_siswa" class="form-control" placeholder="No Telp." required="">
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2">Nama Ayah</label>
		<div class="col-sm-4">
			<input type="text" name="nama_ayah_siswa" class="form-control" placeholder="Nama Ayah Anda" required="">
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2">Nama Ibu</label>
		<div class="col-sm-4">
			<input type="text" name="nama_ibu_siswa" class="form-control" placeholder="Nama Ibu Anda" required="">
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-4">
			<input type="submit" value="Daftar" name="submit" class="btn btn-success">
			<input type="reset" value="Reset" class="btn btn-danger">
			<a href="<?php echo base_url('Home'); ?>" class="btn btn-warning">Batal</a>
		</div>
	</div>

	<?php echo form_close(); ?>