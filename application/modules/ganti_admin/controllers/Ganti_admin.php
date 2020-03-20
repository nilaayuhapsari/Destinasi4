<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ganti_admin extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_ganti_admin');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "Ganti_admin",
			'namafileview' 	=> "v_ganti_admin",
		);
		echo Modules::run('loginn/tampilCore', $data);
    }
}