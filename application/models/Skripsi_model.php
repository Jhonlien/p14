<?php 
class Skripsi_model extends CI_Model{
    public function getAllSkripsi()
    {
        return $this->db->get('skripsi')->result();
    }

    public function getSkripsiById($id)
    {
        return $this->db->get_where('skripsi', array('id' => $id))->row();
    }

    public function tambahDataSkripsi($data)
    {
        $this->db->insert('skripsi', $data);
        return $this->db->affected_rows();
    }

    public function hapusDataSkripsi($id)
    {
        $this->db->where("id = $id");
        return $this->db->delete('skripsi');;
    }

    public function ubahDataSkripsi($data)
    {
        $this->db->where("id = '$data[id]'");
        return $this->db->update('skripsi', $data);
    }

    public function cariDataSkripsi($keyword)
    {
       $this->db->where("nim LIKE '%$keyword%' OR nama LIKE '%$keyword%' OR judul LIKE '%$keyword%'");
        return $this->db->get('skripsi')->result();
    }

}