<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_executive extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_executive');
	}

	public function index()
	{
		$this->dashboard();
	}

	public function array_values_recursive( $array ) {
	    $array = array_values( $array );
	    for ( $i = 0, $n = count( $array ); $i < $n; $i++ ) {
	        $element = $array[$i];
	        if ( is_array( $element ) ) {
	            $array[$i] = $this->array_values_recursive( $element );
	        }
	    }
	    return $array;
	}

	public function dashboard(){
		$this->load->model('M_executive');
		$konsumsi = $this->M_executive->investasi();
		$industri = $this->M_executive->investasi2();

		$data = $this->array_values_recursive($konsumsi);
		$data2 = $this->array_values_recursive($industri);

		foreach ($data as $key1 => $arr) {
			$data[$key1][1] = (int) $data[$key1][1];
		}

		foreach ($data2 as $key1 => $arr) {
			$data2[$key1][1] = (int) $data2[$key1][1];
		}

		// var_dump($data); exit;
		$arr['data_konsumsi'] = $data;
		$arr['data_industri'] = $data2;

		$this->load->view('D_dashboard', $arr);
	}


	public function tampil_data(){
		// Load model
		$this->load->model('M_executive');
		$data['data'] = $this->M_executive->show();
		$this->load->view('D_barang', $data);
	}
	
	public function tampil_data_user(){
		$this->load->model('M_executive');
		$data['data']=$this->M_executive->show_pengguna();
		$this->load->view('D_user', $data);
	}

	public function proses_bisnis(){
		$this->load->model('M_executive');
		$data['data']=$this->M_executive->proses();
		$this->load->view('D_bisnis', $data);
	}
}

?>