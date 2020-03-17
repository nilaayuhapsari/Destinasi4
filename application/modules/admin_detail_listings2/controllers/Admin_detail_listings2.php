<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_detail_listings2 extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_admin_detail_listings2');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "Admin_detail_listings2",
			'namafileview' 	=> "v_admin_detail_listings2",
			'menu'			=>	"Daftar Ajukan"
		);
		echo Modules::run('template_admin/tampilCore', $data);
    }
}