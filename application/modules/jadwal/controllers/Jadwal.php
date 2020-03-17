<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_jadwal');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "jadwal",
			'namafileview' 	=> "v_jadwal",
		);
		echo Modules::run('template/tampilCore', $data);
    }
}