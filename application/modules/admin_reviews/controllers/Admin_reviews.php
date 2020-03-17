<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_reviews extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_admin_reviews');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "admin_reviews",
			'namafileview' 	=> "v_Admin_reviews",
			'menu'			=> "Daftar Komenter"
		);
		echo Modules::run('template_admin/tampilCore', $data);
    }
}