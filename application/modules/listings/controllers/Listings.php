<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listings extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_listings');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "Listings",
			'namafileview' 	=> "v_listings",
		);
		echo Modules::run('template/tampilCore', $data);
    }
}