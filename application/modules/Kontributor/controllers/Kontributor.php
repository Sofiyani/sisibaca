<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontributor extends MX_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->module('Template');
		$this->load->module('Admin');
		$this->load->helper('url');
		$this->load->model('Kontributor_m');
		$this->load->model('Admin_m');
	}

	function index()
	{
		$data['nav']='Kontributor/kontributor_nav_v';
		$data['sidebar']='Kontributor/kontributor_sidebar_v';
		$data['content']='Kontributor/kontributor_kategori_v';
		$data['data']=$this->Admin_m->get_all_kategori();
		$data['menu']="Kategori";
		$data['menu2']=null;
		$data['menu3']=null;
		$this->template->call_kontributor_template($data);
		$this->cek_login();
	}

	function cek_login()
	{
		if(!$this->session->userdata('kontributor'))
		{
			redirect(base_url());
		}
	}

	function nama_doa($id)
	{
		$data['nav']='Kontributor/kontributor_nav_v';
		$data['sidebar']='Kontributor/kontributor_sidebar_v';
		$data['content']='Kontributor/kontributor_namadoa_v';
		$data['data']=$this->Admin_m->get_all_item($id);
		$db=$this->Kontributor_m->get_n_kategori($id);
		$datauser=array(
						'n_kat'=>$db['n_kat']
					);
		$this->session->set_userdata($datauser);
		$data['menu']="Kategori";
		$data['menu2']="Nama Do'a";
		$data['menu3']=null;
		$this->template->call_kontributor_template($data);
		$this->cek_login();	
	}

	function doa($id)
	{
		$data['nav']='Kontributor/kontributor_nav_v';
		$data['sidebar']='Kontributor/kontributor_sidebar_v';
		$data['content']='Kontributor/kontributor_doa_v';
		$data['data']=$this->Admin_m->get_all_doa($id);
		$db=$this->Kontributor_m->get_n_item($id);
		$datauser=array(
						'n_item'=>$db['n_item'],
                                                'id_item'=>$db['id_item']
					);
		$this->session->set_userdata($datauser);
		$data['menu']="Kategori";
		$data['menu2']="Nama Do'a";
		$data['menu3']="Do'a";
		$this->template->call_kontributor_template($data);
		$this->cek_login();	
	}

	function edit_doa($id)
	{
		$data['data']=$this->Admin_m->get_update_doa($id);
		$data['nav']='Kontributor/kontributor_nav_v';
		$data['sidebar']='Kontributor/kontributor_sidebar_v';
		$data['content']='Kontributor/kontributor_editdoa_v';
		$data['menu']="Kategori";
		$data['menu2']="Edit Do'a";
		$data['menu3']=null;
		$this->template->call_kontributor_template($data);
		$this->cek_login();	
	}

	function update_doa($id)
	{
		$db=$this->Kontributor_m->get_detail_doa($id);
		date_default_timezone_set('Asia/Jakarta');
		$data=array(
			'id_kontributor'=>$this->session->userdata('kontributor'),
			'kategori'=>$this->session->userdata('n_kat'),
			'nama_doa'=>$this->session->userdata('n_item'),
			'doa_sebelum'=>$db['doa'],
			'doa_sesudah'=>$this->input->post('doa'),
			'arti_sebelum'=>$db['arti'],
			'arti_sesudah'=>$this->input->post('arti'),
			'indo_sebelum'=>$db['indo'],
			'indo_sesudah'=>$this->input->post('indo'),
			'sumber_sebelum'=>$db['sumber'],
			'sumber_sesudah'=>$this->input->post('sumber'),
			'waktu'=>date('Y-m-d H:i:s')
		);
		$this->Kontributor_m->add_log($data);
		$this->Admin_m->update_doa($id);
		$this->session->set_flashdata('alert', '<div class="alert alert-success">Doa berhasil diedit</div>');
		redirect('Kontributor/doa/'.$this->session->userdata('id_item'));
	}

	function profil()
	{
		$data['nav']='Kontributor/kontributor_nav_v';
		$data['sidebar']='Kontributor/kontributor_sidebar_v';
		$data['content']='Kontributor/kontributor_profile_v';
		$data['data']=$this->Kontributor_m->get_detail_kontributor($this->session->userdata('kontributor'));
		$data['menu']="Profil";
		$data['menu2']=null;
		$data['menu3']=null;
		$this->template->call_kontributor_template($data);
		$this->cek_login();	
	}

	function update_profil($id)
	{
		$data=$this->Kontributor_m->get_detail_kontributor($id);
		$passlama=$this->input->post('passwordlama');
		if (password_verify($passlama, $data['password'])) 
		{
			$this->Kontributor_m->update_kontributor($id);
			$this->session->set_flashdata('alert', '<div class="alert alert-success">Data anda berhasil diubah</div>');
			redirect('kontributor/profil');
		}
		else
		{
			$this->session->set_flashdata('alert', '<div class="alert alert-danger">Password lama anda salah</div>');
			redirect('kontributor/profil');	
		}	
	}
}