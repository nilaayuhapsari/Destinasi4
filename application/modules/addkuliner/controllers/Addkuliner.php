<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addkuliner extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_addkuliner');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "Addkuliner",
			'namafileview' 	=> "v_addkuliner",
		);
		echo Modules::run('template/tampilCore', $data);
    }
}