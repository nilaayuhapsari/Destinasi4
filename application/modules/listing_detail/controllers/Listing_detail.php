<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_detail extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_listing_detail');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "Listing_detail",
			'namafileview' 	=> "v_listing_detail",
		);
		echo Modules::run('template/tampilCore', $data);
    }
}