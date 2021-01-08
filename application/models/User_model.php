<?php

class User_model extends CI_Model
{
    public function getAllAdmin()
    {
        return $this->db->get('admin')->result_array();
    }
    public function getAllPusat()
    {
        return $this->db->get('staff_pusat')->result_array();
    }
    public function getAllDaerah()
    {
        return $this->db->get('staff_daerah')->result_array();
    }

    public function hapusDataAdmin($id)
    {
        $this->db->where('id_admin', $id);
        $this->db->delete('admin');
    }
    public function hapusDataPusat($id)
    {
        $this->db->where('id_staffpusat', $id);
        $this->db->delete('staff_pusat');
    }
    public function hapusDataDaerah($id)
    {
        $this->db->where('id_staffdaerah', $id);
        $this->db->delete('staff_daerah');
    }


    public function input_dataAdmin($data)
    {
        return $this->db->insert('admin', $data);
    }
    public function input_dataPusat($data)
    {
        return $this->db->insert('staff_pusat', $data);
    }
    public function input_dataDaerah($data)
    {
        return $this->db->insert('staff_daerah', $data);
    }

    public function getAdminById($id)
    {
        return $this->db->get_where('admin', ['id_admin' => $id])->result_array();
    }
    public function getPusatById($id)
    {
        return $this->db->get_where('staff_pusat', ['id_staffpusat' => $id])->result_array();
    }
    public function getDaerahById($id)
    {
        return $this->db->get_where('staff_daerah', ['id_staffdaerah' => $id])->result_array();
    }

    public function ubah_admin($data)
    {
        $this->db->where('id_admin', $this->input->post('id'));
        return $this->db->update('admin', $data);
    }
    public function ubah_pusat($data)
    {
        $this->db->where('id_staffpusat', $this->input->post('id'));
        return $this->db->update('staff_pusat', $data);
    }
    public function ubah_daerah($data)
    {
        $this->db->where('id_staffdaerah', $this->input->post('id'));
        return $this->db->update('staff_daerah', $data);
    }
}
