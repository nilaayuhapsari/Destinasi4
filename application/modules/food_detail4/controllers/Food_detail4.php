<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Food_detail4 extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_food_detail4');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "Food_detail4",
			'namafileview' 	=> "v_food_detail4",
		);
		echo Modules::run('template/tampilCore', $data);
    }
}