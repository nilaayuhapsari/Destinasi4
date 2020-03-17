<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_detail_kategori extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_admin_detail_kategori');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "Admin_detail_kategori",
			'namafileview' 	=> "v_admin_detail_kategori",
			'menu'			=>	"Detail Destinasi"
		);
		echo Modules::run('template_admin/tampilCore', $data);
    }
}