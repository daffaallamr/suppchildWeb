<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuppChild - Monitoring</title>

    <link rel="stylesheet" href="<?= base_url('assets'); ?>../css/reset.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>../css/tambahKegiatan.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500;700&display=swap" rel="stylesheet">



    <!-- TABEL -->


    <div class="content">
        <br><br><br>
        <center>
            <h1>DETAIL KEGIATAN</h1>
        </center>
        <br><br><br>

        <?php foreach ($kegiatan as $kgt) : ?>

            <label for="sekarang">Nama Kegiatan</label>
            <input id="sekarang" type="text" name="nama" class="form_login" value="<?php echo $kgt['nama_kegiatan'] ?>" readonly>
            <div class="line"></div>

            <label for="sekarang">Jenis Kategori</label>
            <input id="sekarang" type="text" name="nama" class="form_login" value="<?php if ($kgt['id_daerah'] == 1) {
                                                                                        echo 'Umum';
                                                                                    } else {
                                                                                        echo 'Internal';
                                                                                    } ?>" readonly>
            <div class="line"></div>

            <label for="baru">Daerah Pengaju</label>
            <input id="baru" type="text" name="daerah" class="form_login" value="<?php if ($kgt['id_daerah'] == 1) {
                                                                                        echo 'Gresik';
                                                                                    } else if ($kgt['id_daerah'] == 2) {
                                                                                        echo 'Bangkalan';
                                                                                    } else if ($kgt['id_daerah'] == 3) {
                                                                                        echo 'Mojokerto';
                                                                                    } else if ($kgt['id_daerah'] == 4) {
                                                                                        echo 'Surabaya';
                                                                                    } else if ($kgt['id_daerah'] == 5) {
                                                                                        echo 'Sidoarjo';
                                                                                    } else {
                                                                                        echo 'Lamongan';
                                                                                    } ?>" readonly>
            <div class="line"></div>

            <label for="konfirmasi">File Ajuan</label>
            <a style="text-decoration:none;color:black;" href="http://suppchild.xyz/API/file_kegiatan/<?= $kgt['file_ajuan'] ?>" download target="_blank">Unduh File</a>
            <br>
            <div class="line"></div>

            <label for="konfirmasi">File Laporan</label>
            <br>
            <a style="text-decoration:none;color:black;" href="http://suppchild.xyz/API/file_laporanKegiatan/<?= $kgt['file_laporan'] ?>" download target="_blank">Unduh File</a>
            <br>
            <div class="line"></div>

            <label for="konfirmasi">Foto Laporan</label>

            <a style="text-decoration:none;color:black;" href="http://suppchild.xyz/API/foto_laporan/<?= $kgt['foto_laporan'] ?>" download target="_blank">Unduh File</a>
            <br>
            <div class="line"></div>

            <label for="konfirmasi">Lokasi</label>
            <input id="konfirmasi" type="text" name="file" class="form_login" value="<?php echo $kgt['lokasi'] ?>" readonly>
            <div class="line"></div>

            <label for="konfirmasi">Status</label>
            <input id="konfirmasi" type="text" name="status" class="form_login" value="<?php if ($kgt['id_status'] == 1) {
                                                                                            echo 'diterima';
                                                                                        } else if ($kgt['id_status'] == 2) {
                                                                                            echo 'ditolak';
                                                                                        } else {
                                                                                            echo '';
                                                                                        }  ?>" readonly>
            <div class="line"></div>
            <br><br><br>
        <?php endforeach ?>
        <br><br><br>

    </div>