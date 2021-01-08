<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuppChild - Monitoring</title>

    <link rel="stylesheet" href="<?= base_url('assets'); ?>../css/reset.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>../css/profilStyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500;700&display=swap" rel="stylesheet">



    <!-- CONTENT -->
    <div class="content">
        <img src="<?= base_url('assets'); ?>../assets/img/logo.png" alt="">
        <form action="" class="profile">
            <?php foreach ($user as $user) : ?>
                <br><br>
                <label for="nama">Nama</label>
                <input id="nama" type="text" name="nama" class="form_login" value="<?php echo $user['nama_staffpusat'] ?>" readonly>
                <div class="line"></div>

                <label for="username">Username</label>
                <input id="username" type="text" name="username" class="form_login" value="<?= $user['username'] ?>" readonly>
                <div class="line"></div>
            <?php endforeach ?>
            <div class="aksi">
                <a href="<?= base_url('profil_edit_staff') ?>" type="submit" name="edit" class="submit">UBAH</a>
                <a class="submit" id="konfirmasiKeluar">KELUAR</a>
            </div>


            <!-- MODAL Konfirmasi Keluar -->
            <div id="isiKonfirmasiKeluar" class="modal">

                <!-- Modal content -->
                <div class="modal-content-keluar">
                    <h1 class="yakinKeluar">Apakah anda yakin ingin keluar?</h1>
                    <div class="aksiModal">
                        <input type="submit" name="batal" class="submitModal" id="closeKeluar" value="TIDAK">
                        <a href="<?= base_url('auth'); ?>" class="submitModal">IYA</a>
                    </div>
                </div>
            </div>
            <!-- END HAPUS USER -->
        </form>
        <br><br><br>
    </div>
    <br><br><br><br>
    <!-- END CONTENT -->

    <script src="<?= base_url('assets'); ?>../js/profil.js"></script>