<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Oleh_detail6 extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_oleh_detail6');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "oleh_detail6",
			'namafileview' 	=> "v_oleh_detail6",
		);
		echo Modules::run('template/tampilCore', $data);
    }
}