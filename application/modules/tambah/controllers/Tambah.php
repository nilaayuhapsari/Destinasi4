<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_tambah');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "Tambah",
			'namafileview' 	=> "v_tambah",
			'menu'			=>	"Tambah Kategori"
		);
		echo Modules::run('template_admin/tampilCore', $data);
    }
}