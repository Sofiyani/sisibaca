<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_m extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
	}
	
	function add_kontributor()
	{
		$data=array(
			'username'=>$this->input->post('username'),
			'password'=>password_hash($this->input->post('password'), PASSWORD_DEFAULT, ['cost'=>10]),
			'email'=>$this->input->post('email'),
			'fullname'=>$this->input->post('fullname'),
			'alamat'=>$this->input->post('alamat'),
			'hp'=>$this->input->post('hp'),
			'status'=>'0'
		);
		$this->db->insert('kontributor', $data);
		return $this->db->insert_id();
	}

	function get_kontributor($username)
	{
		$query=$this->db->get_where('kontributor', array('username'=>$username));
		return $query->row_array();
	}
}