<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_wisata extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_index_wisata');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "index_wisata",
			'namafileview' 	=> "v_index_wisata",
		);
		echo Modules::run('template/tampilCore', $data);
    }
}