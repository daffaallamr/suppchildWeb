<?php

class Cabang_model extends CI_Model
{
    public function getTotalAnak()
    {

        $totGresik = $this->db->get_where('anak', array('id_daerah' => '1'));
        $countGresik = $totGresik->num_rows();

        $totBang = $this->db->get_where('anak', array('id_daerah' => '2'));
        $countBang = $totBang->num_rows();

        $totMjk = $this->db->get_where('anak', array('id_daerah' => '3'));
        $countMjk = $totMjk->num_rows();

        $totSurabaya = $this->db->get_where('anak', array('id_daerah' => '4'));
        $countSby = $totSurabaya->num_rows();

        $totSidoarjo = $this->db->get_where('anak', array('id_daerah' => '5'));
        $countSda = $totSidoarjo->num_rows();

        $totLamongan = $this->db->get_where('anak', array('id_daerah' => '6'));
        $countLmg = $totLamongan->num_rows();


        $tot = array('grsk' => $countGresik, 'bang' => $countBang, 'mjk' => $countMjk, 'sda' => $countSda, 'sby' => $countSby, 'lmg' => $countLmg);
        return $tot;
    }

    public function input_dataAnak($data)
    {
        return $this->db->insert('anak', $data);
    }
}
