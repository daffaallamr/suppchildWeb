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


    <div class="content" style="height:1100;">
        <img src="<?= base_url('assets'); ?>../assets/img/logo.png" alt="">
        <center>
            <h1>UBAH KEGIATAN</h1>
        </center>
        <br><br><br>
        <form action="" class="profile" method="post">
            <?php foreach ($kegiatan as $kgt) : ?>
                <input type="hidden" name="id" value="<?= $kgt['id_kegiatan'] ?>">

                <label for="sekarang">Nama Kegiatan</label>
                <input id="sekarang" type="text" name="nama" class="form_login" value="<?php echo $kgt['nama_kegiatan'] ?>">
                <div class="line"></div>

                <label for="sekarang">Jenis Kategori</label>
                <select class="form_login" id="dropDownKategori" name="kategori">
                    <option value="1">Umum</option>
                    <option value="2">Internal</option>
                </select>
                <div class="line"></div>

                <label for="baru">Daerah Pengaju</label>
                <select class="form_login" id="dropDownDaerah" name="daerah">
                    <option value="1">Gresik</option>
                    <option value="2">Bangkalan</option>
                    <option value="3">Mojokerto</option>
                    <option value="4">Surabaya</option>
                    <option value="5">Sidoarjo</option>
                    <option value="6">Lamongan</option>
                </select>
                <div class="line"></div>

                <label for="konfirmasi">File Ajuan</label>
                <input id="konfirmasi" type="text" name="file" class="form_login" value="<?php echo $kgt['file_ajuan'] ?>">
                <div class="line"></div>

                <label for="konfirmasi">File Laporan</label>
                <input id="konfirmasi" type="text" name="file" class="form_login" value="<?php echo $kgt['file_laporan'] ?>">
                <div class="line"></div>

                <label for="konfirmasi">Foto laporan</label>
                <input id="konfirmasi" type="text" name="file" class="form_login" value="<?php echo $kgt['foto_laporan'] ?>">
                <div class="line"></div>

                <label for="konfirmasi">Status</label>
                <select class="form_login" id="dropDownStatus" name="status">
                    <option value="1">diterima</option>
                    <option value="2">ditolak</option>
                </select>
                <div class="line"></div>
                <br><br><br>
            <?php endforeach ?>
            <center>
                <?php if ($this->session->flashdata('pesan') == TRUE) : ?>
                    <div class="alertSalah" role="alert"><?php echo $this->session->flashdata('pesan'); ?></div>
                <?php endif; ?>
            </center>

            <div class="aksi">
                <input type="submit" class="submit" value="SUNTING">
            </div>
        </form>
        <br><br><br>

    </div>
    <br><br><br>



    <script>
        selectDaerah('dropDownKategori', <?= $kgt['id_kategori']; ?>)

        function selectDaerah(id, valueToSelect) {
            let element = document.getElementById(id);
            element.value = valueToSelect;
        }
    </script>

    <script>
        selectDaerah('dropDownDaerah', <?= $kgt['id_daerah']; ?>)

        function selectDaerah(id, valueToSelect) {
            let element = document.getElementById(id);
            element.value = valueToSelect;
        }
    </script>

    <script>
        selectDaerah('dropDownStatus', <?= $kgt['id_status']; ?>)

        function selectDaerah(id, valueToSelect) {
            let element = document.getElementById(id);
            element.value = valueToSelect;
        }
    </script>