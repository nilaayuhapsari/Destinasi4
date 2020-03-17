<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_kategori extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_admin_kategori');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "Admin_kategori",
			'namafileview' 	=> "v_Admin_kategori",
			'menu'			=>	"Daftar Kategori"
		);
		echo Modules::run('template_admin/tampilCore', $data);
    }
}