<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_m extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
	}
	
	function get_all_item($id)
	{
		$sql="SELECT count(item.id_item) AS jumlah,n_item,doa.id_item, item.nomor FROM item,doa WHERE item.id_item=doa.id_item AND item.id_kat=".$id." GROUP BY item.id_item ORDER BY nomor ASC";
		$query=$this->db->query($sql);
		return $query->result_array();	
	}


	function get_detail_item($id)
	{
		$query=$this->db->get_where('item', array('id_kat'=>$id));
		return $query->row_array();
	}

	function get_update_item($id)
	{
		$query=$this->db->get_where('item', array('id_item'=>$id));
		return $query->row_array();
	}

	function get_all_doa($id)
	{
		$this->db->order_by('nomor', 'asc');
		$query=$this->db->get_where('doa', array('id_item'=>$id));
		return $query->result_array();
	}

	function get_detail_doa($id)
	{
		$query=$this->db->get_where('doa', array('id_item'=>$id));
		return $query->row_array();
	}

	function get_update_doa($id)
	{
		$query=$this->db->get_where('doa', array('id_doa'=>$id));
		return $query->row_array();
	}

	function get_all_kategori()
	{
		$sql="SELECT count(kategori.id_kat) as jumlah,n_kat,kategori.id_kat FROM kategori,item WHERE kategori.id_kat=item.id_kat GROUP BY kategori.id_kat";
		$query=$this->db->query($sql);
		return $query->result_array();
	}

	function get_detail_kategori($kat)
	{
		$query=$this->db->get_where('kategori', array('n_kat'=>$kat));
		return $query->row_array();
	}

	function get_update_kategori($id)
	{
		$query=$this->db->get_where('kategori', array('id_kat'=>$id));
		return $query->row_array();
	}

	function get_kategori()
	{
		$this->db->order_by('nomor', 'asc');
		$query=$this->db->get('kategori');
		return $query->result_array();
	}

	function get_item($id)
	{
		$this->db->order_by('nomor', 'asc');
		$query=$this->db->get_where('item', array('id_kat'=>$id));
		return $query->result_array();
	}

	function get_nomor_kategori()
	{
		$sql="SELECT max(nomor) AS number FROM kategori";
		$query=$this->db->query($sql);
		return $query->row_array();
	}

	function add_kategori()
	{
		$this->db->insert('kategori', $this->input->post());
		return $this->db->insert_id();
	}

	function add_item()
	{
		$this->db->insert('item', $this->input->post());
		return $this->db->insert_id();
	}

	function delete_kategori($id)
	{
		return $this->db->delete('kategori', array('id_kat'=>$id));
	}

	function add_doa($id)
	{
		
		$configAudio['upload_path'] = './file_audio';
		$configAudio['max_size'] = '120000000000000';
		$configAudio['allowed_types'] = 'wmv|mp3';
		$configAudio['overwrite'] = FALSE;
		$configAudio['remove_spaces'] = TRUE;
		$audio_name =$_FILES['file_audio']['name'];
		$stringedit =  str_replace(" ", "_", $audio_name);
		$data_doa=[
			'id_item'=>$id,
			'nomor'=>$this->input->post('nomor'),
			'doa'=>$this->input->post('doa'),
			'arti'=>$this->input->post('arti'),
			'indo'=>$this->input->post('indo'),
			'kali'=>$this->input->post('kali'),
			'sumber'=>$this->input->post('sumber'),
			'file_audio'=>$stringedit, //ini nama file audionya
		];
		
		$configAudio['file_name'] = $audio_name;

		$this->load->library('upload', $configAudio);
		$this->upload->initialize($configAudio);
		if(!$this->upload->do_upload('file_audio')) {
			echo $this->upload->display_errors();
			//exit;

		}else{
			$this->db->insert('doa', $data_doa);
			return $this->db->insert_id();

		}
		
	}

	function update_kategori($id)
	{
		$data=array(
			'nomor'=>$this->input->post('nomor'),
			'n_kat'=>$this->input->post('n_kat')
			);

		$this->db->where('id_kat', $id);
		return $this->db->update('kategori', $data);
	}

	function update_namadoa($id)
	{
		$data=array(
			'n_item'=>$this->input->post('n_item')
			);

		$this->db->where('id_item', $id);
		return $this->db->update('item', $data);
	}

	function update_doa($id)

	{

		$configAudio['upload_path'] = './file_audio';
		$configAudio['max_size'] = '120000000000000';
		$configAudio['allowed_types'] = 'wmv|mp3';
		$configAudio['overwrite'] = FALSE;
		$configAudio['remove_spaces'] = TRUE;
		$audio_name =$_FILES['file_audio']['name'];
		$stringedit =  str_replace(" ", "_", $audio_name);

		$data=array(
			'nomor'=>$this->input->post('nomor'),
			'doa'=>$this->input->post('doa'),
			'arti'=>$this->input->post('arti'),
			'indo'=>$this->input->post('indo'),
			'kali'=>$this->input->post('kali'),
			'sumber'=>$this->input->post('sumber'),
			'file_audio'=>$stringedit,
			);

		$configAudio['file_name'] = $audio_name;
		$this->load->library('upload', $configAudio);
		$this->upload->initialize($configAudio);
		if(!$this->upload->do_upload('file_audio')) {
			echo $this->upload->display_errors();
			

		}else{
		$this->db->where('id_doa', $id);
		return $this->db->update('doa', $data);
	}

}

	function delete_doa($id)
	{
		return $this->db->delete('doa', array('id_doa'=>$id));
	}

	function delete_namadoa($id)
	{
		return $this->db->delete('item', array('id_item'=>$id));
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

	function get_all_kontributor()
	{
		$query=$this->db->get('kontributor');
		return $query->result_array();
	}

	function get_detail_kontributor($id)
	{
		$query=$this->db->get_where('kontributor', array('id_kontributor'=>$id));
		return $query->row_array();
	}

	function get_username_kontributor($username)
	{
		$query=$this->db->get_where('kontributor', array('username'=>$username));
		return $query->row_array();
	}

	function get_all_log()
	{
		$sql="SELECT kontributor.id_kontributor,fullname,id_log,kategori,nama_doa,waktu FROM log,kontributor WHERE log.id_kontributor=kontributor.id_kontributor ORDER BY id_log ASC";
		$query=$this->db->query($sql);
		return $query->result_array();
	}

	function get_detail_log($id)
	{
		$query=$this->db->get_where('log', array('id_log'=>$id));
		return $query->row_array();
	}

	function delete_log($id)
	{
		return $this->db->delete('log', array('id_log'=>$id));
	}

	function get_detail_admin($id)
	{
		$query=$this->db->get_where('admin', array('id_admin'=>$id));
		return $query->row_array();
	}

	function update_admin($id)
	{
		$data=array(
			'email'=>$this->input->post('email'),
			'password'=>password_hash($this->input->post('password'), PASSWORD_DEFAULT, ['cost'=>10])
			);

		$this->db->where('id_admin', $id);
		return $this->db->update('admin', $data);
	}

	function update_kontributor($id)
	{
		$data=array(
			'status'=>$this->input->post('status')
			);

		$this->db->where('id_kontributor', $id);
		return $this->db->update('kontributor', $data);
	}

	function delete_kontributor($id)
	{
		return $this->db->delete('kontributor', array('id_kontributor'=>$id));
	}
}

