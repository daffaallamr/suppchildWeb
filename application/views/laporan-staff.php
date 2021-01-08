<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuppChild - Monitoring</title>

    <link rel="stylesheet" href="<?= base_url('assets'); ?>../css/reset.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>../css/styleLaporan.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>../css/downloadButton.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500;700&display=swap" rel="stylesheet">


    <!-- TABEL -->
    <div class="watermark">
        <img src="<?= base_url('assets'); ?>../assets/img/logo.png" alt="">
    </div>

    <div class="content">
        <div class="judul">
            <h1>Data</h1>
            <span class="line_1"></span>
            <h1>Laporan Kasus</h1>
            <span class="line_2"></span>
            <button class="downloadButton">
                <a href="<?= base_url('Down'); ?>">Download Data</a>
            </button>
        </div>

        <table cellspacing='0'>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Kasus</th>
                    <th>Deskripsi</th>
                    <th>Daerah</th>
                    <th>Tgl pelaporan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($kasus as $kasus) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $kasus['nama'] ?></td>
                        <td><?= $kasus['detail'] ?></td>
                        <td><?php if ($kasus['id_daerah'] == 1) {
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
                            } ?></td>
                        <td><?= $kasus['tgl_upload'] ?></td>
                        <td><?= $kasus['status'] ?></td>
                        <td>
                            <button><a style="text-decoration:none;color:white;" href="<?= base_url(); ?>laporan_staff/ubah/<?= $kasus['id']; ?>">UBAH</a></button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <br><br><br>
    </div>
    <!-- END TABEL -->