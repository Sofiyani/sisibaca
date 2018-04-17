<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_m extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
	}
	
	function get_admin($admin)
	{
		$query=$this->db->get_where('admin', array('username'=>$admin));
		return $query->row_array();
	}

	function get_email($email)
	{
		$query=$this->db->get_where('t_admin', array('email'=>$email));
		return $query->row_array();	
	}

	function get_kontributor($username)
	{
		$query=$this->db->get_where('kontributor', array('username'=>$username));
		return $query->row_array();
	}
}