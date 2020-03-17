<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addwisata extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_addwisata');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "Addwisata",
			'namafileview' 	=> "v_addwisata",
		);
		echo Modules::run('template/tampilCore', $data);
    }
}