<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tes extends CI_Controller {
	public function index()
	{
		$this->load->view('view_tes');
	}

	public function tampil()
	{
		$bil1 = $this->input->post('bil1');
		$bil2 = $this->input->post('bil2');
		$perkalian = $bil1 * $bil2;
		echo "Perkalian $bil1 x $bil2 = $perkalian";
	}

	public function simpan()
	{
		echo $this->input->post('nama_lengkap');
		echo $this->input->post('password');
	}
}
