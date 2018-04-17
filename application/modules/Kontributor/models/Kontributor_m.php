<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontributor_m extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
	}

	function add_log($data)
	{
		$this->db->insert('log', $data);
		return $this->db->insert_id();
	}

	function get_n_kategori($id)
	{
		$query=$this->db->get_where('kategori', array('id_kat'=>$id));
		return $query->row_array();
	}

	function get_n_item($id)
	{
		$query=$this->db->get_where('item', array('id_item'=>$id));
		return $query->row_array();
	}

	function get_detail_doa($id)
	{
		$query=$this->db->get_where('doa', array('id_doa'=>$id));
		return $query->row_array();
	}	

	function get_detail_kontributor($id)
	{
		$query=$this->db->get_where('kontributor', array('id_kontributor'=>$id));
		return $query->row_array();
	}

	function update_kontributor($id)
	{
		$data=array(
			'alamat'=>$this->input->post('alamat'),
			'password'=>password_hash($this->input->post('password'), PASSWORD_DEFAULT, ['cost'=>10]),
			'hp'=>$this->input->post('hp')

		);
		$this->db->where('id_kontributor', $id);
		return $this->db->update('kontributor', $data);
	}
}