<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_kuliner extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_index_kuliner');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "index_kuliner",
			'namafileview' 	=> "v_index_kuliner",
		);
		echo Modules::run('template/tampilCore', $data);
    }
}