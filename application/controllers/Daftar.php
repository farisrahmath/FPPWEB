<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
 	public function __construct()
 	{
  		parent::__construct();
  		$this->load->model('Model_Daftar');
 	}
 		
 	public function index() 
 	{
 		$data['title'] = "Daftar Calon Peserta Didik";
 		$data ['web'] = $this->Model_Web->tampil()->row();

 		if ($this->input->post('submit')) {
 			$nama = $this->input->post('nama_siswa');
 			$jenis_kelamin = $this->input->post('jenis_kelamin_siswa');
 			$tgl_lahir = $this->input->post('tgl_lahir_siswa');
 			$agama = $this->input->post('agama_siswa');
 			$alamat = $this->input->post('alamat_siswa');
 			$asal_sekolah = $this->input->post('asal_sekolah_siswa');
 			$telp = $this->input->post('no_hp_siswa');
 			$ayah = $this->input->post('nama_ayah_siswa');
 			$ibu = $this->input->post('nama_ibu_siswa');

 			$objek = array(
 				'nama_siswa' => $nama,
 				'jenis_kelamin_siswa' => $jenis_kelamin,
 				'tgl_lahir_siswa' => $tgl_lahir,
 				'agama_siswa' => $agama,
 				'alamat_siswa' => $alamat,
 				'asal_sekolah_siswa' => $asal_sekolah,
 				'no_hp_siswa' => $telp,
 				'nama_ayah_siswa' => $ayah,
 				'nama_ibu_siswa' => $ibu 
 			);

 			$query = $this->Model_Daftar->simpan($objek);

 			if($query) {
 				$this->session->set_flashdata('berhasil_simpan', 'sukses');
 				redirect(base_url('daftar'));
 			}
 		} else {
 				$data['konten_public'] = "daftar";
 				$this->load->view('template_public', $data);
 			}
 	}
 }
