<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftar extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		 $this->load->helper(array('url','form'));
		 $this->load->model('Model_Admin');

		 if($this->session->userdata('status') !='login') {
			redirect(base_url('login'));
		}

		$id_login   = $this->session->userdata("id_user");
        $datalogin  = $this->db->get_where("user", array('id_user'=> $id_login))->row();
	}

	public function index()
    {
    	$data = array(
        'daftar' => $this->Model_Admin->get_pendaftar()
    	);
        $this->load->view('admin/pendaftar',$data);
    }

	public function insert_pendaftar() 
	{
		$data['page']	= "tambah_pendaftar";
		$this->load->view('admin/tambah_pendaftar', $data);


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

 			$query = $this->Model_Admin->insert_pendaftar($objek);

 			if($query) {
 				$this->session->set_flashdata('berhasil_simpan', 'sukses');
 				redirect(base_url('admin/pendaftar/insert_pendaftar'));
 			}
 		} 
	}

	public function edit_pendaftar($id)
	{
		$data ['judul'] = ""; 
		$data['data_edit'] = $this->Model_Admin->edit_pendaftar($id);
		 // print_r($data['data_edit']);
		 // die;
		$this->load->view('admin/edit_pendaftar',$data);
	}

	public function aksi_update($id)
	{
		$id = array('id_daftar' => $id );
		
		$objek = array(
			'nama_siswa' =>  $this->input->post('nama_siswa'),
			'jenis_kelamin_siswa' => $this->input->post('jenis_kelamin_siswa'),
			'tgl_lahir_siswa' => $this->input->post('tgl_lahir_siswa'),
			'agama_siswa' => $this->input->post('agama_siswa'),
			'alamat_siswa' => $this->input->post('alamat_siswa'),
			'asal_sekolah_siswa' => $this->input->post('asal_sekolah_siswa'),
			'no_hp_siswa' => $this->input->post('no_hp_siswa'),
			'nama_ayah_siswa' => $this->input->post('nama_ayah_siswa'),
			'nama_ibu_siswa' => $this->input->post('nama_ibu_siswa') 
		);

		// print_r($objek);
		// die();

		$query = $this->Model_Admin->update_pendaftar($id,$objek);

		redirect(base_url('admin/pendaftar/'));
		
	}

	public function delete_pendaftar($id)
	{
		$where = array('id_daftar' => $id);
		$this->Model_Admin->delete_pendaftar($where,'daftar');
		redirect(base_url('admin/pendaftar'));
	}
	
	public function cetak() 
	{
		 $daftar = $this->db->get('daftar')->result();
		 $this->load->library('pdf');
		 $this->load->view('admin/laporanpdf');
    }
	

	
}