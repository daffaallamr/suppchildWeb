<?php

class AnakLamongan_model extends CI_Model
{
    private $_table = "anak";

    public function getAllAnak()
    {
        return $this->db->get_where($this->_table, ["id_daerah" => "6"])->result();
    }

    public function getAnakById($id)
    {
        return $this->db->get_where('anak', ['id' => $id])->result_array();
    }

    public function ubah($data)
    {
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('anak', $data);
    }
}
