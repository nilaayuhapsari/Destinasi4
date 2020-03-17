<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Destinasi extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_destinasi');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "destinasi",
			'namafileview' 	=> "v_destinasi",
		);
		echo Modules::run('template/tampilCore', $data);
    }
}