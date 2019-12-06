<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Coba extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper(array('url'));
    }

    public function index()
    {
        echo "Hello ini dari method index";
    }

    public function tes()
    {
        $nilai_a = $this->input->post('nilai_a');
        $nilai_b = $this->input->post('nilai_b');
        $nilai_c = $this->input->post('nilai_c');
        $nilai_d = $this->input->post('nilai_d');
        $penjumlahan = $nilai_a+$nilai_b+$nilai_c+$nilai_d;
        echo "Hasil penjumlahan = $penjumlahan";
    }

    public function entri()
    {
        $this->load->view('coba_entri');
    }
}