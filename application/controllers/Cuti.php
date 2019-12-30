<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cuti extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('MCuti');
    }
    public function index(){
        if($this->input->server('REQUEST_METHOD') == 'POST'){
            $nama = $this->input->post('nama');
            $tgl_m = $this->input->post('tgl_mulai');
            $tgl_a = $this->input->post('tgl_akhir');
            $status = 'N';
            $save = $this->MCuti->add($nama, $tgl_m, $tgl_a,$status);
            if($save){
                $this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert"> Berhasil Menambahkan Data. </div>');
                redirect('cuti');
            }
        }
        else if($this->input->get('delete')){
            $del = $this->MCuti->delete($this->input->get('delete'));
            if($del){
                $this->session->set_flashdata('msg','<div class="alert alert-warning" role="alert"> Berhasil Menghapus Data. </div>');
                redirect('cuti');
            }
        }
        else if($this->input->get('edit')){
            $data['data'] = $this->MCuti->get_by_id($this->input->get('edit'));
            $this->load->view('templates/header');
            $this->load->view('edit',$data);
            $this->load->view('templates/footer');
        }
        else if($this->input->get('search')){
            $src = $this->input->get('search');
            $data['data'] = $this->MCuti->search($src);

            //print_r($data);die;

            $this->load->view('templates/header');
            $this->load->view('cuti',$data);
            $this->load->view('templates/footer');
        }
        else{
            $data['data'] = $this->MCuti->get_all();
            $this->load->view('templates/header');
            $this->load->view('cuti',$data);
            $this->load->view('templates/footer');
        }
    }

    public function update($id){
            $nama = $this->input->post('nama');
            $tgl_m = $this->input->post('tgl_mulai');
            $tgl_a = $this->input->post('tgl_akhir');
            $status = 'N';
            $upd = $this->MCuti->update($id, $nama, $tgl_m, $tgl_a, $status);
            if($upd){
                $this->session->set_flashdata('msg','<div class="alert alert-success" role="alert"> Berhasil Memperbaharui Data. </div>');
                redirect('cuti');
            }
        }


    public function accepted($id){
        $this->db->query("UPDATE cuti_tb SET status = 'Y' WHERE id = {$id}");
        $this->session->set_flashdata('msg','<div class="alert alert-success" role="alert"> Berhasil Menyetujui Cuti. </div>');
        redirect('cuti');

    }
}