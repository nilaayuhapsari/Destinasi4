<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_data');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "Data",
			'namafileview' 	=> "v_data",
			'menu'			=> "Detail Kategori",
		);
		echo Modules::run('template_admin/tampilCore', $data);
    }
}