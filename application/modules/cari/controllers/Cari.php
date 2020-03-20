<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cari extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_cari');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "Cari",
			'namafileview' 	=> "v_cari",
		);
		echo Modules::run('template/tampilCore', $data);
    }
}