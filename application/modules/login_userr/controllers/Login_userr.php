<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_userr extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_login_userr');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "login_userr",
			'namafileview' 	=> "v_login_userr",
		);
		echo Modules::run('loginn/tampilCore', $data);
    }
}