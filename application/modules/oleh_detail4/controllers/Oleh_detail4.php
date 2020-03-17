<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Oleh_detail4 extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_oleh_detail4');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "oleh_detail4",
			'namafileview' 	=> "v_oleh_detail4",
		);
		echo Modules::run('template/tampilCore', $data);
    }
}