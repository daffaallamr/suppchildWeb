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


    <div class="content" style="height: 700px;">
        <img src="<?= base_url('assets'); ?>../assets/img/logo.png" alt="">
        <center>
            <h1>TAMBAH USER</h1>
        </center>
        <br><br><br>

        <form action="<?php echo base_url() . 'useradd/tambahadmin' ?>" class="profile" method="post">

            <label for="sekarang">Nama</label>
            <input id="sekarang" type="text" name="nama" class="form_login">
            <div class="line"></div>

            <label for="baru">Username</label>
            <input id="baru" type="text" name="username" class="form_login">
            <div class="line"></div>

            <label for="konfirmasi">Password</label>
            <input id="konfirmasi" type="text" name="password" class="form_login">
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





    <script src="<?= base_url('assets'); ?>../js/datauser.js"></script>