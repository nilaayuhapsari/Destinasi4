<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Food_detail extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_food_detail');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "Food_detail",
			'namafileview' 	=> "v_food_detail",
		);
		echo Modules::run('template/tampilCore', $data);
    }
}