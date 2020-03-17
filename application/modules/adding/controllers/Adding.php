<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adding extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_adding');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "Adding",
			'namafileview' 	=> "v_adding",
		);
		echo Modules::run('template/tampilCore', $data);
    }
}