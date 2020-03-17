<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_admin extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_login_admin');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "login_admin",
			'namafileview' 	=> "v_login_admin",
		);
		echo Modules::run('loginn/tampilCore', $data);
    }
}