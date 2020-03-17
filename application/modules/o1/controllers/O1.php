<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class O1 extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_o1');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "O1",
			'namafileview' 	=> "v_o1",
		);
		echo Modules::run('template/tampilCore', $data);
    }
}