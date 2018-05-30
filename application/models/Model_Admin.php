<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Admin extends CI_Model {

/*
	public function tampil_pendaftar()
	{
		return $this->db->get('daftar');
	}
*/

	public function get_pendaftar() 
	{
		$this->db->select('*');
    	$this->db->from('daftar');
    	return $this->db->get()->result();
	}

	public function edit_pendaftar($id) 
	{
		$this->db->select('*');
    	$this->db->from('daftar');
    	$this->db->where('id_daftar',$id);
    	return $this->db->get()->result();
	}

	public function update_pendaftar($id,$objek) 
	{
		$this->db->where($id);
        $this->db->update('daftar',$objek);
	}

	public function insert_pendaftar($data) 
	{
  		return $this->db->insert('daftar', $data);
 	}

 	/*public function edit_pendaftar($id,$data) 
 	{
        $this->db->where('id_daftar',$id);
        $this->db->update('daftar',$data);
    }*/

    // public function edit_pendaftar($data,$id)
    // {
    // 	$this->db->where('id_daftar',$id);
    //     $this->db->update('daftar',$data);
    // }

    public function delete_pendaftar($id)
	{
		$this->db->where($id);
		$this->db->delete('daftar');
	}

 	/*public function edit_pendaftar($where,$table)
 	{
 		return $this->db->get_where($where,'daftar');
 	}

 	public function update_pendaftar()
 	{
 		return $this->db->get('daftar');
 	}*/

	

}