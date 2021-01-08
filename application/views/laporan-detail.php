<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuppChild - Monitoring</title>

    <link rel="stylesheet" href="<?= base_url('assets'); ?>../css/reset.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>../css/tambahLaporan.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500;700&display=swap" rel="stylesheet">



    <!-- TABEL -->


    <div class="content">
        <img src="<?= base_url('assets'); ?>../assets/img/logo.png" alt="">
        <center>
            <h1>DETAIL LAPORAN</h1>
        </center>
        <br><br><br>

        <form action="" class="profile" method="">
            <?php foreach ($kasus as $kasus) : ?>
                <label for="sekarang">Nama Korban</label>
                <input id="sekarang" type="text" name="nama" class="form_login" value="<?php echo $kasus['nama'] ?>" readonly>
                <div class="line"></div>

                <label for="baru">Tempat Kejadian</label>
                <input id="baru" type="text" name="tempat" class="form_login" value="<?php echo $kasus['tempat'] ?>" readonly>
                <div class="line"></div>

                <label for="konfirmasi">Deskripsi Singkat</label>
                <input id="konfirmasi" type="text" name="detail" class="form_login" value="<?php echo $kasus['detail'] ?>" readonly>
                <div class="line"></div>

                <label for="konfirmasi">Status</label>
                <input id="konfirmasi" type="text" name="daerah" class="form_login" value="<?php echo $kasus['status'] ?>" readonly>
                <div class="line"></div>

                <label for="konfirmasi">Daerah</label>
                <input id="konfirmasi" type="text" name="daerah" class="form_login" value="<?php if ($kasus['id_daerah'] == 1) {
                                                                                                echo 'Gresik';
                                                                                            } else if ($kasus['id_daerah'] == 2) {
                                                                                                echo 'Bangkalan';
                                                                                            } else if ($kasus['id_daerah'] == 3) {
                                                                                                echo 'Mojokerto';
                                                                                            } else if ($kasus['id_daerah'] == 4) {
                                                                                                echo 'Surabaya';
                                                                                            } else if ($kasus['id_daerah'] == 5) {
                                                                                                echo 'Sidoarjo';
                                                                                            } else {
                                                                                                echo 'Lamongan';
                                                                                            } ?>">
                <div class="line"></div>

                <label for="konfirmasi">Tanggal Pelaporan</label>
                <input id="konfirmasi" type="text" name="daerah" class="form_login" value="<?php echo $kasus['tgl_upload'] ?>" readonly>
                <div class="line"></div>
            <?php endforeach ?>
            <br><br><br>

        </form>
        <br><br><br>

    </div>