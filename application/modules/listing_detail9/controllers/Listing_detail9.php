<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_detail9 extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_listing_detail9');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "Listing_detail9",
			'namafileview' 	=> "v_listing_detail9",
		);
		echo Modules::run('template/tampilCore', $data);
    }
}