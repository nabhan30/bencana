<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function login()
	{
		if (isset($_POST['submit'])) {
			$user = $this->input->post('username', true);
			$pass = $this->input->post('password', true);
			$cek = $this->M_user->ceklogin($user, md5($pass));
			$hasil = count($cek);
			if ($hasil>0) {
				$cek_login = $this->db->get_where('pengguna', array('username' => $user, 'password' => md5($pass)))->row();
				if ($cek_login->jabatan=='superadmin') {
					redirect('C_superadmin');
				} elseif ($cek_login->jabatan=='adminoperator') {
					redirect('C_adminoperator');
				} elseif ($cek_login->jabatan=='executive') {
					redirect('C_executive');
				}
			} else {
				$this->session->set_flashdata('msg', 
                '<div class="alert alert-danger alert-dismissable fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Username atau password salah</div>');

				redirect(base_url('C_user'));
			}
		}
	}

	public function adminoperator() {
		$this->load->view('adminoperator');
	}

	public function superadmin() {
		$this->load->view('V_input');
	}

	public function executive() {
		$this->load->view('D_dashboard');
	}

	public function tampil_register(){
		$this->load->view('V_tambah_pengguna');
	}

	public function tambah_pengguna(){

		// Ambil data dari form
		$name 	  = $this->input->post('name');
		$username = $this->input->post('username');
		$email	  = $this->input->post('email');
		$password = $this->input->post('password');
		$jabatan  = $this->input->post('jabatan');
		
		// Membuat associative array
		$data = array(
			'name' 		=> $name,
			'username' 	=> $username,
			'email' 	=> $email,
			'password' 	=> md5($password),
			'jabatan' 	=> $jabatan
		);

		// Masukkan ke DB
		$insert = $this->M_user->register($data);

		if ($insert) {
			$this->session->set_flashdata('msg', 
                '<div class="alert alert-success alert-dismissable fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Alhamdulillah Data berhasil disimpan</div>');

			redirect(base_url().'C_user/tampil_register');
		} else {
			$this->session->set_flashdata('msg', 
                '<div class="alert alert-danger alert-dismissable fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Data gagal disimpan</div>');

			redirect(base_url().'C_user/tampil_register');
		}
	}

	public function edit($id){
		$this->load->model('M_user');

		$where = array('id' => $id);
		$data['data'] = $this->M_user->edit($where,'pengguna')->result();
		$this->load->view('V_edit_pengguna',$data);
		}

	public function tampil_data_pengguna(){
		// Load model
		$this->load->model('M_user');
		$data['data'] = $this->M_user->show();

		$this->load->view('V_tampil_pengguna', $data);
	}
	public function update(){
		$this->load->model('M_user');

		// Ambil data dari form
		$id 	  = $this->input->post('id');
		$name 	  = $this->input->post('name');
		$username = $this->input->post('username');
		$email	  = $this->input->post('email');
		$password = $this->input->post('password');
		$jabatan  = $this->input->post('jabatan');
		
		// Membuat associative array
		$data = array(
			'name' 		=> $name,
			'username' 	=> $username,
			'email' 	=> $email,
			'password' 	=> md5($password),
			'jabatan' 	=> $jabatan
		);

		// Masukkan ke DB
		$update = $this->M_user->update($data,$id);

		if ($update) {
			$this->session->set_flashdata('msg', 
                '<div class="alert alert-success alert-dismissable fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Alhamdulillah Data berhasil disimpan</div>');

			redirect(base_url().'C_user/tampil_data_pengguna');
		} else {
			$this->session->set_flashdata('msg', 
                '<div class="alert alert-danger alert-dismissable fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Data gagal disimpan</div>');

			redirect(base_url().'C_user/tampil_data_pengguna');
		}
	}
	public function delete($id){
		// Load model
		$this->load->model('M_user');
		$delete = $this->M_user->delete($id);

		if ($delete) {
			$this->session->set_flashdata('msg', 
                '<div class="alert alert-success alert-dismissable fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Alhamdulillah Data berhasil dihapus</div>');

			redirect(base_url().'C_user/tampil_data_pengguna');
		} else {
			$this->session->set_flashdata('msg', 
                '<div class="alert alert-danger alert-dismissable fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Data gagal dihapus</div>');

			redirect(base_url().'C_user/tampil_data_pengguna');
		}
	}


}
?>