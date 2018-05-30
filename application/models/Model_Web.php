<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Web extends CI_Model {

	public function tampil()
 	{
	  return $this->db->get('web');
 	} 

} 