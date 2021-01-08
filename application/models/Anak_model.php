<?php

class Anak_model extends CI_Model
{
    public function getAllAnak()
    {
        return $this->db->get('anak')->result_array();
    }

    public function cariDataAnak()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        return $this->db->get('anak')->result_array();
    }

    public function hapusData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('anak');
    }
}
