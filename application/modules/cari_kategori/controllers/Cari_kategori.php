<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cari_kategori extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_cari_kategori');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "cari_kategori",
			'namafileview' 	=> "v_cari_kategori",
			'menu'			=> "Data Kategori"
		);
		echo Modules::run('template_admin/tampilCore', $data);
    }
}