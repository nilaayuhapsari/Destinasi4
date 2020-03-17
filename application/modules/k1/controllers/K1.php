<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class K1 extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_k1');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "K1",
			'namafileview' 	=> "v_k1",
		);
		echo Modules::run('template/tampilCore', $data);
    }
}