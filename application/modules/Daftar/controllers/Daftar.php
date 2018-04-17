<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends MX_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Daftar_m');
	}

	function index()
	{
		$this->load->view('daftar_v');
	}

	function addkontributor()
	{
		if ($this->input->post('passwordawal')==$this->input->post('password')) 
		{
			$cekusername=$this->Daftar_m->get_kontributor($this->input->post('username'));
			if ($cekusername['username']!=$this->input->post('username'))
			{
				$this->Daftar_m->add_kontributor();
				$this->session->set_flashdata('alert', '<div class="alert alert-success">Anda berhasil mendaftar</div>');
				redirect('Daftar');
			}
			else
			{
				$this->session->set_flashdata('alert', '<div class="alert alert-warning">Username sudah ada</div>');
				redirect('Daftar');
			}
		}
		else
		{
			$this->session->set_flashdata('alert', '<div class="alert alert-warning">Password anda tidak sama</div>');
			redirect('Daftar');
		}
	}
}