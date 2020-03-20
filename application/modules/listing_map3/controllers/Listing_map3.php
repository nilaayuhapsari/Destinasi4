<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_map3 extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_listing_map3');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "Listing_map3",
			'namafileview' 	=> "v_listing_map3",
		);
		echo Modules::run('template/tampilCore', $data);
    }
}