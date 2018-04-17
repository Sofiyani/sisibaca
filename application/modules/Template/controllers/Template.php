<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MX_Controller 
{

	function __construct()
	{
		parent::__construct();
	}	

	function call_admin_template($data=null)
	{
		$this->load->view('template_admin_v', $data);
	}

	function call_kontributor_template($data=null)
	{
		$this->load->view('template_kontributor_v', $data);
	}
}