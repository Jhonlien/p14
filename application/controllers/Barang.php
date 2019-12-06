<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->model('Barang_model');
	}
	public function entri(){
		$this->load->view('entri_barang');
	}

	public function edit(){
		$kode_barang = $this->input->get('kode_barang');
		$xyz['barang'] = $this->Barang_model->getAllBarangDetil($kode_barang);
		$this->load->view('edit_barang', $xyz);
	}

	public function proses_entri(){
		if($this->Barang_model->tambahBarang($_POST) > 0) {
			echo "Barang sukses di entri ke database";
			redirect('barang/tampil');
		} else {
			echo "Barang gagal di entri ke database";
		}
		//print_r($_POST);
	}

	public function proses_update(){
		if($this->Barang_model->ubahDataBarang($_POST) > 0) {
			echo "Barang sukses di ubah ke database";
			redirect('barang/tampil');
		} else {
			echo "Barang gagal di ubah ke database";
		}
		//print_r($_POST);
	}

	public function tampil(){
		$abc['barang'] = $this->Barang_model->getAllBarang(); 
		//print_r($data['barang']);
		$this->load->view('view_barang', $abc);
	}

	public function hapus()
	{
		$kode_barang = $this->input->get('kode_barang');
		$hapus = $this->Barang_model->hapusDataBarang($kode_barang);
		if($hapus) {
			redirect('barang/tampil');
		 } else {
			echo "Barang gagal di hapus";
		 }
	}
}