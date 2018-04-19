<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Baca_m extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
	}

	function get_all_kategori()
	{
		$sql="SELECT count(kategori.id_kat) as jumlah,n_kat,kategori.id_kat FROM kategori,item WHERE kategori.id_kat=item.id_kat GROUP BY kategori.id_kat";
		$query=$this->db->query($sql);
		return $query->result_array();
	}

	function get_all_item($id)
	{
		$sql="SELECT count(item.id_item) AS jumlah,n_item,doa.id_item, item.nomor FROM item,doa WHERE item.id_item=doa.id_item AND item.id_kat=".$id." GROUP BY item.id_item ORDER BY nomor ASC";
		$query=$this->db->query($sql);
		return $query->result_array();	
	}

	function get_all_doa($id)
	{
		$this->db->order_by('nomor', 'asc');
		$query=$this->db->get_where('doa', array('id_item'=>$id));
		return $query->result_array();
	}

	function get_detail_doaitem($id,$nomor)
	{
		$this->db->order_by('nomor', 'asc');
		$query=$this->db->get_where('doa', array('id_item'=>$id ,'nomor'=>$nomor));
		return $query->result_array();
	}

}