<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_registration');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "Registration",
			'namafileview' 	=> "v_registration",
		);
		echo Modules::run('loginn/tampilCore', $data);
    }
}