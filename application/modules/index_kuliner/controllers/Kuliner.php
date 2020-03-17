<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuliner extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_kuliner');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "kuliner",
			'namafileview' 	=> "v_kuliner",
		);
		echo Modules::run('template/tampilCore', $data);
    }
}