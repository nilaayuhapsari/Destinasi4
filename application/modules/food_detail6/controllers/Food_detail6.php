<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Food_detail6 extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_food_detail6');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "Food_detail6",
			'namafileview' 	=> "v_food_detail6",
		);
		echo Modules::run('template/tampilCore', $data);
    }
}