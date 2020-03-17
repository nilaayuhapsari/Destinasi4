<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_kategori_cari extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_admin_kategori_cari');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "Admin_kategori_cari",
			'namafileview' 	=> "v_admin_kategori_cari",
			'menu'			=>	"Daftar Kategori"
		);
		echo Modules::run('template_admin/tampilCore', $data);
    }
}