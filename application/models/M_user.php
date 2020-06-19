<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	private $table = 'pengguna';

	public function ceklogin($user, $pass)
	{
		$this->db->where('username', $user);	
		$this->db->where('password', $pass);
		return $this->db->get('pengguna')->row();
	}

	public function register($data = array())
	{
		return $this->db->insert($this->table, $data);
	}

	public function edit($where, $table){
		return $this->db->get_where($table,$where);
	}
	public function show()
	{
		return $this->db->get($this->table)
						->result_array();
	}
	public function update($data, $id)
	{
		return $this->db->where('id', $id)
						->update($this->table, $data);
	}
	public function delete($id){
		return $this->db->where('id', $id)
						->delete($this->table);
	}


}
?>