<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Login_m');
		$this->load->module('Admin');
		$this->load->helper('url');
	}

	function index($data=false)
	{
		$this->load->view('login_v', $data);
		if($this->session->userdata('admin'))
		{
			redirect('Admin');
		}	
	}

	function masuk()
	{
		if ($this->input->post('submit')=='submit') 
		{
			$user=$this->input->post('username');
			$pass=$this->input->post('password');

			$cekadmin=$this->Login_m->get_admin($user);
			$cekkontributor=$this->Login_m->get_kontributor($user);
			if ($this->input->post('username')==$cekadmin['username']) 
			{
				if (password_verify($pass, $cekadmin['password'])) 
				{
					$datauser=array(
						'admin'=>$cekadmin['id_admin'],
						'user'=>$cekadmin['fullname'],
						'login'=>TRUE
					);
					$this->session->set_userdata($datauser);
					redirect('Admin');
				}
				else
				{
					$this->session->set_flashdata('alert', '<div class="alert alert-warning">Username atau password anda salah</div>');
					redirect(base_url());
				}
			}
			else if($this->input->post('username')==$cekkontributor['username'])
			{
				if (password_verify($pass, $cekkontributor['password'])) 
				{
					if ($cekkontributor['status']!=0)
					{
						$datauser=array(
						'kontributor'=>$cekkontributor['id_kontributor'],
						'user'=>$cekkontributor['fullname'],
						'login'=>TRUE
						);
						$this->session->set_userdata($datauser);
						redirect('Kontributor');
					}
					else
					{
						$this->session->set_flashdata('alert', '<div class="alert alert-warning">Akun anda belum aktif</div>');
						redirect(base_url());
					}	
				}
				else
				{
					$this->session->set_flashdata('alert', '<div class="alert alert-warning">Username atau password anda salah</div>');
					redirect(base_url());
				}
			}
			else
			{
				$this->session->set_flashdata('alert', '<div class="alert alert-danger">Anda belum terdaftar</div>');
				redirect(base_url());
			}
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}