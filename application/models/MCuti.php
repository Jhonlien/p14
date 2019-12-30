<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MCuti extends CI_Model {
    protected $_table = 'cuti_tb'; 
    public function get_all(){
        return $this->db->get($this->_table)->result_array();
    }

    public function get_by_id($id){
        return $this->db->get_where($this->_table,['id' => $id])->result_array();
    }

    public function add($nama, $tglm, $tgla, $status){
        $data = ['nama' => $nama, 'tgl_mulai' => $tglm, 'tgl_akhir' => $tgla, 'status' => $status];
        return $this->db->insert($this->_table, $data);
    }

    public function delete($id){
        return $this->db->delete($this->_table, ['id' => $id]);
    }

    public function update($id, $nama, $tglm, $tgla, $stt){
        return $this->db->query("UPDATE {$this->_table} SET nama = '{$nama}', tgl_mulai = '{$tglm}', tgl_akhir   = '{$tgla}', status = '{$stt}'
        WHERE id = {$id}");
    }

    public function search($nama){
        $this->db->where("nama LIKE '%$nama%'");
        return $this->db->get('cuti_tb')->result_array();
    }

}