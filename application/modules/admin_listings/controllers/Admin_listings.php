<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_listings extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_admin_listings');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "admin_listings",
			'namafileview' 	=> "v_Admin_listings",
			'menu'			=> "Daftar Ajukan"
		);
		echo Modules::run('template_admin/tampilCore', $data);
    }
}