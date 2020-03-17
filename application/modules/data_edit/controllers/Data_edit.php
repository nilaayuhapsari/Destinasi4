<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_edit extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_data_edit');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "Data_edit",
			'namafileview' 	=> "v_data_edit",
			'menu'			=> "Detail Destinasi",
		);
		echo Modules::run('template_admin/tampilCore', $data);
    }
}