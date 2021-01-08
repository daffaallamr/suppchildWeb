<?php

class laporan_model extends CI_Model
{
    public function getAllUser()
    {
        return $this->db->get('kasus')->result_array();
    }

    public function getDataById($id)
    {
        return $this->db->get_where('kasus', ['id' => $id])->result_array();
    }

    public function input_data($data)
    {
        return $this->db->insert('kasus', $data);
    }

    public function hapusData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('kasus');
    }

    public function ubah_data($data)
    {
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('kasus', $data);
    }
}
