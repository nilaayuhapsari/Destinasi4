<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_index');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "index",
			'namafileview' 	=> "v_index",
		);
		echo Modules::run('template/tampilCore', $data);
    }
}