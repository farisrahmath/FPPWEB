<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

 public function index()
 {
	$data['web'] = $this->Model_Web->tampil()->row();
 	$data['konten_public'] = "konten_public";
  	$this->load->view('template_public', $data);
 }

} 