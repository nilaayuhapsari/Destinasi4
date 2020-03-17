<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginn extends MX_Controller {

	function __construct()
	{
		parent:: __construct();
		//load model

		$this->load->model('m_loginn');
		$this->load->model('login/m_session');
	}

	

	// view core templating
	public function index()
	{
		$this->load->view('view_loginn');
	}

	public function tampilCore($data)
	{
		$id = $this->session->userdata('session_id');
		
		$this->load->view('view_loginn',$data);
	}

}
