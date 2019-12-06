<?php 
class Barang_model extends CI_Model{
    public function tambahBarang($data)
    {
        $this->db->insert('barang', $data);
        return $this->db->affected_rows();
    }

    public function getAllBarang()
    {
        return $this->db->get('barang')->result();
    }

    public function getAllBarangDetil($kode_barang)
    {
        return $this->db->get_where('barang', array('kode_barang' => $kode_barang))->row();
    }
    
    public function ubahDataBarang($data)
    {
        $this->db->where("kode_barang = '$data[kode_barang]'");
        return $this->db->update('barang', $data);
    }

    public function hapusDataBarang($kode_barang)
    {
        $this->db->where("kode_barang = '$kode_barang'");
        return $this->db->delete('barang');
    }
}  