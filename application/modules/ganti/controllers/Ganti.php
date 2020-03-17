<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ganti extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_ganti');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "ganti",
			'namafileview' 	=> "v_ganti",
		);
		echo Modules::run('loginn/tampilCore', $data);
    }
}