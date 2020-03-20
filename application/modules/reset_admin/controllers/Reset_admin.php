<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reset_admin extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_reset_admin');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "Reset_admin",
			'namafileview' 	=> "v_reset_admin",
		);
		echo Modules::run('loginn/tampilCore', $data);
    }
}