<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends MX_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Api_m');
	}

	function index()
	{
		echo '<h1>Selamat datang di Api</h1>';
	}

	function kategori()
	{
		$data['Kategori']=$this->Api_m->get_kategori();
		header('Content-Type: application/json;charset=utf-8');
		echo json_encode($data, JSON_PRETTY_PRINT);
	}

	function item($id=false)
	{
		header('Content-Type: application/json;charset=utf-8');
		if ($id==false)
		{
			$data['Item']=$this->Api_m->get_all_item();
			echo json_encode($data, JSON_PRETTY_PRINT);
		}
		else
		{
			$item['Item']=$this->Api_m->get_detail_item($id);
			echo json_encode($item, JSON_PRETTY_PRINT);
		}
	}

	function doa($id=false)
	{
		header('Content-Type: application/json;charset=utf-8');
		if ($id==false)
		{
			$data['Doa']=$this->Api_m->get_all_doa();
			echo json_encode($data, JSON_PRETTY_PRINT);
		}
		else
		{
			$doa['Doa']=$this->Api_m->get_detail_doa($id);
			echo json_encode($doa, JSON_PRETTY_PRINT);
		}
	}

	function data()
	{
		header('Content-Type: application/json;charset=utf-8');
		echo json_encode($this->Api_m->get_data(), JSON_PRETTY_PRINT);
	}
}