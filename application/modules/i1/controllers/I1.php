<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class I1 extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_i1');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "I1",
			'namafileview' 	=> "v_i1",
		);
		echo Modules::run('template/tampilCore', $data);
    }
}