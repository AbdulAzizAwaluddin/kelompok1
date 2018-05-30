<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->tbl = 'login';
	}

	function count_user($username,$password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);

		$query = $this->db->get($this->tbl);
		return $query->num_rows();
	}

	function ambil_user($username)
	{
		$query = $this->db->get_where($this->tbl, array('username' => $username));
		$query = $query->result_array();
		if ($query) {
			return $query[0];
		}
	}
	
	
}
