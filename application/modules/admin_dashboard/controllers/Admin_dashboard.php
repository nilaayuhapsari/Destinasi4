<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_dashboard extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_admin_dashboard');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "Admin_dashboard",
			'namafileview' 	=> "v_admin_dashboard",
			'menu'			=> "Selamat Datang Admin",
		);
		echo Modules::run('template_admin/tampilCore', $data);
    }
}