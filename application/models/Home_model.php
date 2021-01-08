<?php

class Home_model extends CI_Model
{
    public function getTotal2018()
    {
        // tahun
        $tahun2018 = $this->db->get_where('anak', array('created_at' => '2018'));
        $count2018 = $tahun2018->num_rows();

        $tahun2019 = $this->db->get_where('anak', array('created_at' => '2019'));
        $count2019 = $tahun2019->num_rows();

        $tahun2020 = $this->db->get_where('anak', array('created_at' => '2020'));
        $count2020 = $tahun2020->num_rows();

        $tahun2021 = $this->db->get_where('anak', array('created_at' => '2021'));
        $count2021 = $tahun2021->num_rows();

        // total anak binaan
        $anakBinaan = $this->db->get('anak');
        $totalAnak = $anakBinaan->num_rows();

        // total kegiatan
        $kegiatan = $this->db->get('kegiatan');
        $totalKegiatan = $kegiatan->num_rows();

        // total kegiatan
        $kasus = $this->db->get('kasus');
        $totalKasus = $kasus->num_rows();

        // jenis kelamin
        $contGresikL = array('id_daerah' => 1, 'jenis_kelamin' => 'L');
        $gresikL = $this->db->get_where('anak', $contGresikL);
        $countGresikL = $gresikL->num_rows();

        $contGresikP = array('id_daerah' => 1, 'jenis_kelamin' => 'P');
        $gresikP = $this->db->get_where('anak', $contGresikP);
        $countGresikP = $gresikP->num_rows();

        // bangkalan
        $contBangL = array('id_daerah' => 2, 'jenis_kelamin' => 'L');
        $BangL = $this->db->get_where('anak', $contBangL);
        $countBangL = $BangL->num_rows();

        $contBangP = array('id_daerah' => 2, 'jenis_kelamin' => 'P');
        $BangP = $this->db->get_where('anak', $contBangP);
        $countBangP = $BangP->num_rows();

        // Mojokerto
        $contMjkL = array('id_daerah' => 3, 'jenis_kelamin' => 'L');
        $MjkL = $this->db->get_where('anak', $contMjkL);
        $countMjkL = $MjkL->num_rows();

        $contMjkP = array('id_daerah' => 3, 'jenis_kelamin' => 'P');
        $MjkP = $this->db->get_where('anak', $contMjkP);
        $countMjkP = $MjkP->num_rows();

        // Surabaya
        $contSbyL = array('id_daerah' => 4, 'jenis_kelamin' => 'L');
        $SbyL = $this->db->get_where('anak', $contSbyL);
        $countSbyL = $SbyL->num_rows();

        $contSbyP = array('id_daerah' => 4, 'jenis_kelamin' => 'P');
        $SbyP = $this->db->get_where('anak', $contSbyP);
        $countSbyP = $SbyP->num_rows();

        // Sidoarjo
        $contSdaL = array('id_daerah' => 5, 'jenis_kelamin' => 'L');
        $SdaL = $this->db->get_where('anak', $contSdaL);
        $countSdaL = $SdaL->num_rows();

        $contSdaP = array('id_daerah' => 5, 'jenis_kelamin' => 'P');
        $SdaP = $this->db->get_where('anak', $contSdaP);
        $countSdaP = $SdaP->num_rows();

        // Lamongan
        $contLmgL = array('id_daerah' => 6, 'jenis_kelamin' => 'L');
        $LmgL = $this->db->get_where('anak', $contLmgL);
        $countLmgL = $LmgL->num_rows();

        $contLmgP = array('id_daerah' => 6, 'jenis_kelamin' => 'P');
        $LmgP = $this->db->get_where('anak', $contLmgP);
        $countLmgP = $LmgP->num_rows();

        $tot = array('totalAnak' => $totalAnak, 'totalKegiatan' => $totalKegiatan, 'tot2018' => $count2018, 'tot2019' => $count2019, 'tot2020' => $count2020, 'tot2021' => $count2021, 'gresikL' => $countGresikL, 'gresikP' => $countGresikP, 'bangL' => $countBangL, 'bangP' => $countBangP, 'mjkL' => $countMjkL, 'mjkP' => $countMjkP, 'sbyL' => $countSbyL, 'sbyP' => $countSbyP, 'sdaL' => $countSdaL, 'sdaP' => $countSdaP, 'lmgL' => $countLmgL, 'lmgP' => $countLmgP, 'totalKasus' => $totalKasus);
        return $tot;
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
