<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuppChild - Monitoring</title>

    <link rel="stylesheet" href="<?= base_url('assets'); ?>../css/reset.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>../css/tambahUser.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500;700&display=swap" rel="stylesheet">



    <!-- TABEL -->


    <div class="content">
        <img src="<?= base_url('assets'); ?>../assets/img/logo.png" alt="">
        <center>
            <h1>DETAIL ANAK</h1>
        </center>
        <br><br><br>

        <form action="" class="profile" method="">
            <?php foreach ($anak as $anak) : ?>
                <label for="sekarang">Nama</label>
                <input id="sekarang" type="text" name="nama" class="form_login" value="<?php echo $anak['nama'] ?>" readonly>
                <div class="line"></div>

                <label for="baru">NIK</label>
                <input id="baru" type="number" name="nik" class="form_login" value="<?php echo $anak['nik'] ?>" readonly>
                <div class="line"></div>

                <label for="konfirmasi">Tempat Lahir</label>
                <input id="konfirmasi" type="text" name="tempat" class="form_login" value="<?php echo $anak['tempat_lahir'] ?>" readonly>
                <div class="line"></div>

                <label for="konfirmasi">Tanggal Lahir</label>
                <input id="date" type="text" name="tanggal" class="form_login" value="<?php echo $anak['tgl_lahir'] ?>" readonly>
                <div class="line"></div>

                <label for="konfirmasi">Jenis Kelamin</label>
                <input id="date" type="text" name="jenis" class="form_login" value="<?php echo $anak['jenis_kelamin'] ?>" readonly>
                <div class="line"></div>

                <label for="konfirmasi">Agama</label>
                <input id="konfirmasi" type="text" name="agama" class="form_login" value="<?php echo $anak['agama'] ?>" readonly>
                <div class="line"></div>

                <label for="konfirmasi">Alamat</label>
                <input id="konfirmasi" type="text" name="alamat" class="form_login" value="<?php echo $anak['alamat'] ?>" readonly>
                <div class="line"></div>

                <label for="konfirmasi">Wali</label>
                <input id="konfirmasi" type="text" name="wali" class="form_login" value="<?php echo $anak['wali'] ?>" readonly>
                <div class="line"></div>

                <label for="konfirmasi">Kesehatan</label>
                <input id="date" type="text" name="kesehatan" class="form_login" value="<?php echo $anak['kesehatan'] ?>" readonly>
                <div class="line"></div>

                <label for="konfirmasi">Pendidikan</label>
                <input id="date" type="text" name="pendidikan" class="form_login" value="<?php echo $anak['pendidikan'] ?>" readonly>
                <div class="line"></div>

                <label for="konfirmasi">Ekonomi</label>
                <input id="date" type="text" name="ekonomi" class="form_login" value="<?php echo $anak['ekonomi'] ?>" readonly>
                <div class="line"></div>

                <label for="konfirmasi">Daerah</label>
                <input id="date" type="text" name="daerh" class="form_login" value="<?php if ($anak['id_daerah'] == 1) {
                                                                                        echo 'Gresik';
                                                                                    } else if ($anak['id_daerah'] == 2) {
                                                                                        echo 'Bangkalan';
                                                                                    } else if ($anak['id_daerah'] == 3) {
                                                                                        echo 'Mojokerto';
                                                                                    } else if ($anak['id_daerah'] == 4) {
                                                                                        echo 'Surabaya';
                                                                                    } else if ($anak['id_daerah'] == 5) {
                                                                                        echo 'Sidoarjo';
                                                                                    } else {
                                                                                        echo 'Lamongan';
                                                                                    } ?>" readonly>
                <div class="line"></div>
            <?php endforeach ?>
            <br><br><br>
        </form>
        <br><br><br>

    </div>





    <script src="<?= base_url('assets'); ?>../js/datauser.js"></script>