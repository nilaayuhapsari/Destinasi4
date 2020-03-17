<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addoleh extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_addoleh');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "Addoleh",
			'namafileview' 	=> "v_addoleh",
		);
		echo Modules::run('template/tampilCore', $data);
    }
}