<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_input extends CI_Model {

	private $table = 'barang';

	public function __construct(){
		parent::__construct();
	}

	//insert
	public function input($data = array())
	{
		return $this->db->insert($this->table, $data);
	}
	
	public function show()
	{
		return $this->db->get($this->table)
						->result_array();
	}

	public function edit($where, $table){
		return $this->db->get_where($table,$where);
	}

	// Update
	public function update($data, $id)
	{
		return $this->db->where('kode_barang', $id)
						->update($this->table, $data);
	}

	// Delete
	public function delete($id)
	{
		return $this->db->where('kode_barang', $id)
						->delete($this->table);
	}
}
?>