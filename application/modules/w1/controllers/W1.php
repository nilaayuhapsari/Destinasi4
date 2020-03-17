<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class W1 extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_w1');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "W1",
			'namafileview' 	=> "v_w1",
		);
		echo Modules::run('template/tampilCore', $data);
    }
}