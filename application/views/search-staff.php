<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuppChild - Monitoring</title>

    <link rel="stylesheet" href="<?= base_url('assets'); ?>../css/reset.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>../css/hasilSearch.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500;700&display=swap" rel="stylesheet">

<body>


    <!-- TABEL -->
    <div class="watermark">
        <img src="<?= base_url('assets'); ?>../assets/img/logo.png" alt="">
    </div>

    <div class="content">
        <div class="judul">
            <h1>Hasil Pencarian</h1>
            <span class="line_1"></span>
            <h1>Data Anak Binaan</h1>
            <span class="line_2"></span>
        </div>
        <br><br><br>

        <table cellspacing='0'>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>L/P</th>
                    <th>TTL</th>
                    <th>Alamat</th>
                    <th>Agama</th>
                    <th>Wali</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    $no = 1;
                    foreach ($anak as $anak) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $anak['nama'] ?></td>
                    <td><?= $anak['nik'] ?></td>
                    <td><?= $anak['jenis_kelamin'] ?></td>
                    <td><?= $anak['tempat_lahir'], ", ", $anak['tgl_lahir'] ?></td>
                    <td><?= $anak['alamat'] ?></td>
                    <td><?= $anak['agama'] ?></td>
                    <td><?= $anak['wali'] ?></td>
                </tr>
            <?php endforeach; ?>

            </tr>
            </tbody>
        </table>
        <br><br><br>
    </div>
    <!-- END TABEL -->



</body>

</html>