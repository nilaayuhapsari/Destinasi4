<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_settings extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_admin_settings');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "admin_settings",
			'namafileview' 	=> "v_Admin_settings",
			'menu'			=> "Pengaturan"
		);
		echo Modules::run('template_admin/tampilCore', $data);
    }
}