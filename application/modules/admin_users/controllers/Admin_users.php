<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_users extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_admin_users');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "admin_users",
			'namafileview' 	=> "v_Admin_users",
			'menu'			=> "Daftar Pengguna"
		);
		echo Modules::run('template_admin/tampilCore', $data);
    }
}