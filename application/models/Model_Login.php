<?php
class Model_Login extends CI_Model {

	public function login($table, $where)
 	{
 		return $this->db->get_where($table, $where);
 	}
 
} 