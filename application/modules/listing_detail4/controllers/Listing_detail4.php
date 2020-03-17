<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_detail4 extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_listing_detail4');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "Listing_detail4",
			'namafileview' 	=> "v_listing_detail4",
		);
		echo Modules::run('template/tampilCore', $data);
    }
}