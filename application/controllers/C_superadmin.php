<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_superadmin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_input');
	}

	public function index()
	{
		$this->load->view('V_input');
	}

	public function input()
	{
		// Ambil data dari form
		$kategori = $this->input->post('kategori');
		$tipe     = $this->input->post('tipe');
		$merk     = $this->input->post('merk');
		$kode_barang 	  = $this->input->post('kode');
		$jumlah_barang	  = $this->input->post('jumlah');
		$tgl_masuk 		  = $this->input->post('tglM');
		$tgl_kadaluarsa   = $this->input->post('tglK');
		$harga_jual = $this->input->post('hargaJ');
		$harga_beli = $this->input->post('hargaB');
		
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

			redirect(base_url().'C_superadmin');    
		} else {
			$this->session->set_flashdata('msg', 
                '<div class="alert alert-danger alert-dismissable fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Data gagal disimpan</div>');

			redirect(base_url().'C_superadmin');    
		}
	}
	
	// Insert --> show form, proses
	public function tampil_data(){
		// Load model
		$this->load->model('M_input');
		$data['data'] = $this->M_input->show();

		$this->load->view('V_edit', $data);
	}

	public function edit($id){
		$this->load->model('M_input');

		$where = array('kode_barang' => $id);
		$data['data'] = $this->M_input->edit($where,'barang')->result();
		$this->load->view('V_editbarang',$data);
		}
	// Update --> show form, proses
	public function update(){
		$this->load->model('M_input');
		// Ambil data dari form
		$kategori 		  = $this->input->post('kategori');
		$tipe     		  = $this->input->post('tipe');
		$merk     		  = $this->input->post('merk');
		$kode_barang 	  = $this->input->post('kode');
		$jumlah_barang	  = $this->input->post('jumlah');
		$tgl_masuk 		  = $this->input->post('tglM');
		$tgl_kadaluarsa   = $this->input->post('tglK');
		$harga_jual 	  = $this->input->post('hargaJ');
		$harga_beli   	  = $this->input->post('hargaB');
		
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
		$update = $this->M_input->update($data,$kode_barang);

		if ($update) {
			$this->session->set_flashdata('msg', 
                '<div class="alert alert-success alert-dismissable fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Alhamdulillah Data berhasil disimpan</div>');

			redirect(base_url().'C_superadmin/tampil_data');
		} else {
			$this->session->set_flashdata('msg', 
                '<div class="alert alert-danger alert-dismissable fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Data gagal disimpan</div>');

			redirect(base_url().'C_superadmin/tampil_data');
		}
	}

	// Delete --> ID --> sesuatu yang unik
	public function delete($id){
		// Load model
		$this->load->model('M_input');
		$delete = $this->M_input->delete($id);

		if ($delete) {
			$this->session->set_flashdata('msg', 
                '<div class="alert alert-success alert-dismissable fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Alhamdulillah Data berhasil dihapus</div>');

			redirect(base_url().'C_superadmin/tampil_data');
		} else {
			$this->session->set_flashdata('msg', 
                '<div class="alert alert-danger alert-dismissable fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Data gagal dihapus</div>');

			redirect(base_url().'C_superadmin/tampil_data');
		}
	}
}

?>