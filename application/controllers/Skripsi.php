<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Skripsi extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->model('Skripsi_model');
    }

    public function index()
    {
        $data['skp'] = $this->Skripsi_model->getAllSkripsi();  
        $this->load->view('templates/header', $data);
        $this->load->view('skripsi/index', $data);
        $this->load->view('templates/footer');

    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Skripsi';
        $data['skp'] = $this->Skripsi_model->getSkripsiById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('skripsi/detail', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        if($this->Skripsi_model->tambahDataSkripsi($_POST) > 0) {
           $this->session->set_flashdata("msg", "<div class='alert alert-success' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Sukses</strong> Data Berhasil disimpan..</div>");
            redirect('skripsi');
        } else {
            $this->session->set_flashdata("msg", "<div class='alert alert-danger' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Sukses</strong> Data Gagal disimpan..</div>");
            redirect('skripsi');
        }
    }

    public function hapus($id)
    {
        if( $this->Skripsi_model->hapusDataSkripsi($id)) {
            $this->session->set_flashdata("msg", "<div class='alert alert-success' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Sukses</strong> Data Berhasil dihapus..</div>");
            redirect('skripsi');
        } else {
            $this->session->set_flashdata("msg", "<div class='alert alert-danger' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Sukses</strong> Data Gagal dihapus..</div>");
            redirect('skripsi');
        }
    }

    public function getubah()
    {
        echo json_encode($this->Skripsi_model->getSkripsiById($_POST['id']));
    }

    public function ubah()
    {
        if( $this->Skripsi_model->ubahDataSkripsi($_POST) > 0 ) {
            $this->session->set_flashdata("msg", "<div class='alert alert-success' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Sukses</strong> Data Berhasil diubah..</div>");
            redirect('skripsi');
        } else {
            $this->session->set_flashdata("msg", "<div class='alert alert-danger' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Sukses</strong> Data Gagal diubah..</div>");
            redirect('skripsi');
        } 
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Skripsi';
        $data['skp'] = $this->Skripsi_model->cariDataSkripsi($_POST['keyword']);
        $this->load->view('templates/header', $data);
        $this->load->view('skripsi/index', $data);
        $this->load->view('templates/footer');
    }

}