<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_executive extends CI_Model {

	private $table = 'barang';
	private $user_table = 'pengguna';

	public function __construct(){
		parent::__construct();
	}

	public function investasi()
	{
		$sql = "SELECT LEFT(tanggal_masuk, 4) as tahun, SUM(harga_beli) as total_harga FROM `barang` WHERE kategori='konsumsi' GROUP BY LEFT(tanggal_masuk, 4)";
		return $this->db->query($sql)
						->result_array();
	}

	public function investasi2()
	{
		$sql = "SELECT LEFT(tanggal_masuk, 4) as tahun, SUM(harga_beli) as total_harga FROM `barang` WHERE kategori='industri' GROUP BY LEFT(tanggal_masuk, 4)";
		return $this->db->query($sql)
						->result_array();
	}

	public function show()
	{
		return $this->db->get($this->table)
						->result_array();
	}

	public function show_pengguna() 
	{
		return $this->db->get($this->user_table)
						->result_array();	
	}

	public function proses() 
	{
		$today  = date("Y-m-d");
		$future = date("Y-m-d", strtotime('+10 days', time()));

		return $this->db->where('tanggal_kadaluarsa >=', $today)
						->where('tanggal_kadaluarsa <=', $future)
						->get($this->table)
						->result_array();	
	}
}
?>