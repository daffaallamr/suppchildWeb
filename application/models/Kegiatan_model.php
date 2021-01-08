<?php

class Kegiatan_model extends CI_Model
{
    public function getAllUser()
    {
        return $this->db->get('kegiatan')->result_array();
    }

    public function getDataById($id)
    {
        return $this->db->get_where('kegiatan', ['id_kegiatan' => $id])->result_array();
    }

    public function hapusData($id)
    {
        $this->db->where('id_kegiatan', $id);
        $this->db->delete('kegiatan');
    }

    public function input_data($data)
    {
        return $this->db->insert('kegiatan', $data);
    }

    public function ubah_data($data)
    {
        $this->db->where('id_kegiatan', $this->input->post('id'));
        return $this->db->update('kegiatan', $data);
    }
}
