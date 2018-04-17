<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_m extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
	}
	
	function get_kategori()
	{
		$this->db->order_by('nomor', 'asc');
		$query=$this->db->get('kategori');
		return $query->result_array();
	}

	function get_all_item()
	{
		$this->db->order_by('nomor', 'asc');
		$query=$this->db->get('item');
		return $query->result_array();
	}

	function get_detail_item($id)
	{
		$this->db->order_by('nomor', 'asc');
		$query=$this->db->get_where('item', array('id_kat'=>$id));
		return $query->result_array();
	}

	function get_all_doa()
	{
		$this->load->helper('custom');
		$this->db->order_by('nomor', 'asc');
		$sql=$this->db->get('doa');
		$query = $sql->result();
		foreach ($query as $i => $val) 
		{
			$query[$i]->doa=unicode_to_text($query[$i]->doa);
			$query[$i]->sumber=unicode_to_text($query[$i]->sumber);
		}
		return $query;
	}

	function get_detail_doa($id)
	{
		$this->load->helper('custom');
		$this->db->order_by('nomor', 'asc');
		$sql=$this->db->get_where('doa', array('id_item'=>$id));
		$query = $sql->result();
		foreach ($query as $i => $val) 
		{
			$query[$i]->doa=unicode_to_text($query[$i]->doa);
			$query[$i]->sumber=unicode_to_text($query[$i]->sumber);
		}
		return $query;
	}

	function get_data()
	{
		$rows=array();
		foreach ($this->get_kategori() as $row) 
		{
			foreach ($this->get_detail_item($row['id_kat']) as $rowitem) 
			{
				foreach ($this->get_detail_doa($rowitem['id_item']) as $rowdoa) 
				{
					$rowitem['doa'][]=$rowdoa;
				}
				$row['item'][] = $rowitem;
			}
			$rows[] = $row;
		}
		return $rows;
	}

	function unicode_to_text($string)
	{
		$str = preg_replace('/%u([0-9A-F]+)/', '&#x$1;', $string);
		$text = html_entity_decode($str, ENT_COMPAT, 'UTF-8');
		return $text;
	}
}