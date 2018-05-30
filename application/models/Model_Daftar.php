<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Daftar extends CI_Model {

	public function tampil()
	{
		return $this->db->get('daftar');
	}

 	public function simpan($data) {
  		return $this->db->insert('daftar', $data);
 	}

 	public function hapus($data)
 	{
 		$hapus = $this->db->where('id_daftar', $data);
 		return $this->db->delete('daftar', $hapus);
 	}

} 