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
            <h1>TAMBAH LAPORAN</h1>
        </center>
        <br><br><br>

        <form action="<?php echo base_url() . 'laporantambah/index' ?>" class="profile" method="post">

            <label for="sekarang">Nama Korban</label>
            <input id="sekarang" type="text" name="nama" class="form_login">
            <div class="line"></div>

            <label for="baru">Tempat Kejadian</label>
            <input id="baru" type="text" name="tempat" class="form_login">
            <div class="line"></div>

            <label for="konfirmasi">Deskripsi Singkat</label>
            <input id="konfirmasi" type="text" name="detail" class="form_login">
            <div class="line"></div>

            <label for="konfirmasi">Daerah</label>
            <select class="form_login" id="cars" name="daerah">
                <option value="1">Gresik</option>
                <option value="2">Bangkalan</option>
                <option value="3">Mojokerto</option>
                <option value="4">Surabaya</option>
                <option value="5">Sidoarjo</option>
                <option value="6">Lamongan</option>
            </select>
            <div class="line"></div>

            <center>
                <?php if ($this->session->flashdata('pesan') == TRUE) : ?>
                    <div class="alertSalah" role="alert"><?php echo $this->session->flashdata('pesan'); ?></div>
                <?php endif; ?>
            </center>

            <div class="aksi">
                <input type="submit" class="submit" value="TAMBAH">
            </div>
            <br><br><br>
        </form>
        <br><br><br>

    </div>