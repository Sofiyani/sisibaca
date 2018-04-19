<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Baca extends MX_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->module('Template');
		$this->load->model('Baca_m');
		$this->load->helper('url');
		
		
	}

	function index()
	{
		
		$data['nav']='Baca/baca_nav_v';
		$data['sidebar']='Baca/baca_sidebar_v';
		$data['content']='Baca/baca_content_v';
		$data['menu']=null;
		$data['menu2']=null;
		$data['menu3']=null;
		$this->template->call_admin_template($data);
	}

	function kategori()
	{
		$data['nav']='Baca/baca_nav_v';
		$data['sidebar']='Baca/baca_sidebar_v';
		$data['content']='Baca/baca_kategori';
		$data['data']=$this->Baca_m->get_all_kategori();
		$data['menu']="Kategori Do'a";
		$data['menu2']=null;
		$data['menu3']=null;
		$this->template->call_admin_template($data);
		
	}

	function nama_doa($id)
	{
		$data['nav']='Baca/baca_nav_v';
		$data['sidebar']='Baca/baca_sidebar_v';
		$data['content']='Baca/baca_namadoa_v';
		$data['data']=$this->Baca_m->get_all_item($id);
		$datauser=array(
						'id_item'=>$id
					);
		$this->session->set_userdata($datauser);
		$data['menu']="Kategori";
		$data['menu2']="Nama Do'a";
		$data['menu3']=null;
		$this->template->call_admin_template($data);
	
	}

	function doa($id)
	{
		$data['nav']='Baca/baca_nav_v';
		$data['sidebar']='Baca/baca_sidebar_v';
		$data['content']='Baca/baca_doa_v';
		$datauser=array(
						'id_doa'=>$id
					);
		$this->session->set_userdata($datauser);
		

		$data['data']=$this->Baca_m->get_all_doa($id);
		$data['menu']="Kategori";
		$data['menu2']="Nama Do'a";
		$data['menu3']="Do'a";
		$this->template->call_admin_template($data);
	
	}

	function doadetail($id,$nomor)
	{
		$data['nav']='Baca/baca_nav_v';
		$data['sidebar']='Baca/baca_sidebar_v';
		$data['content']='Baca/baca_detaildoa_v';
		$datauser=array(
						'id_doa'=>$id
					);
		$this->session->set_userdata($datauser);
		
		

		$data['data']=$this->Baca_m->get_detail_doaitem($id,$nomor);
		$data['menu']="Kategori";
		$data['menu2']="Nama Do'a";
		$data['menu3']="Do'a";
		$this->template->call_admin_template($data);


	}


}
