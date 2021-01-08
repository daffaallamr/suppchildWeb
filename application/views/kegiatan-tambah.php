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


    <div class="content" style="height:800;">
        <img src="<?= base_url('assets'); ?>../assets/img/logo.png" alt="">
        <center>
            <h1>TAMBAH KEGIATAN</h1>
        </center>
        <br><br><br>

        <?php echo form_open_multipart('KegiatanTambah/index'); ?>

        <label for="sekarang">Nama Kegiatan</label>
        <input id="sekarang" type="text" name="nama" class="form_login">
        <div class="line"></div>

        <label for="sekarang">Jenis Ketegori</label>
        <select class="form_login" id="cars" name="kategori">
            <option value="1">Umum</option>
            <option value="2">Internal</option>
        </select>
        <div class="line"></div>

        <label for="baru">Daerah Pengaju</label>
        <select class="form_login" id="cars" name="daerah">
            <option value="1">Gresik</option>
            <option value="2">Bangkalan</option>
            <option value="3">Mojokerto</option>
            <option value="4">Surabaya</option>
            <option value="5">Sidoarjo</option>
            <option value="6">Lamongan</option>
        </select>
        <div class="line"></div>

        <label for="konfirmasi">Upload File</label>
        <input id="konfirmasi" type="file" name="file" class="form_login">
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
        <?php echo form_close() ?>
        <br><br><br>

    </div>