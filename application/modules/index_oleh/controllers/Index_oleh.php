<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_oleh extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_index_oleh');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "index_oleh",
			'namafileview' 	=> "v_index_oleh",
		);
		echo Modules::run('template/tampilCore', $data);
    }
}