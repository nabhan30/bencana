<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_adminoperator extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_input');
	}

	public function index()
	{
		$this->load->view('adminoperator');
	}

	public function input()
	{
		// Ambil data dari form
		$kategori 		  = $this->input->post('kategori');
		$tipe      		  = $this->input->post('tipe');
		$merk     		  = $this->input->post('merk');
		$kode_barang 	  = $this->input->post('kode');
		$jumlah_barang	  = $this->input->post('jumlah');
		$tgl_masuk 		  = $this->input->post('tglM');
		$tgl_kadaluarsa   = $this->input->post('tglK');
		$harga_jual   	  = $this->input->post('hargaJ');
		$harga_beli 	  = $this->input->post('hargaB');
		
		// Membuat associative array
		$data = array(
			'kategori' 			=> $kategori,
			'tipe' 				=> $tipe,
			'merk' 				=> $merk,
			'kode_barang' 		=> $kode_barang,
			'jumlah_barang' 	=> $jumlah_barang,
			'tanggal_masuk' 	=> $tgl_masuk,
			'tanggal_kadaluarsa'=> $tgl_kadaluarsa,
			'harga_jual' 		=> $harga_jual,
			'harga_beli' 		=> $harga_beli
		);

		// Masukkan ke DB
		$insert = $this->M_input->input($data);

		if ($insert) {
			$this->session->set_flashdata('msg', 
                '<div class="alert alert-success alert-dismissable fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Alhamdulillah Data berhasil disimpan</div>');

			redirect(base_url().'C_adminoperator');
		} else {
			$this->session->set_flashdata('msg', 
                '<div class="alert alert-danger alert-dismissable fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Data gagal disimpan</div>');

			redirect(base_url().'C_adminoperator');
		}
	}
}

?>