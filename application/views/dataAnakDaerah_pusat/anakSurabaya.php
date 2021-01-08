<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuppChild - Monitoring</title>

    <link rel="stylesheet" href="<?= base_url('assets'); ?>../css/reset.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>../css/listAnakDaerah.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>../css/downloadButton.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500;700&display=swap" rel="stylesheet">

<body>


    <!-- TABEL -->
    <div class="watermark">
        <img src="<?= base_url('assets'); ?>../assets/img/logo.png" alt="">
    </div>

    <div class="content">
        <div class="judul">
            <h1>Anak Binaan</h1>
            <span class="line_1"></span>
            <h1>Cabang Surabaya</h1>
            <span class="line_S"></span>
            <button class="downloadButton">
                <a href="<?= base_url('Down/surabaya'); ?>">Download data</a>
            </button>
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
                    foreach ($anak as $a) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?php echo $a->nama ?></td>
                    <td><?php echo $a->nik ?></td>
                    <td><?php echo $a->jenis_kelamin ?></td>
                    <td><?php echo $a->tempat_lahir, ", ", $a->tgl_lahir ?></td>
                    <td><?php echo $a->alamat ?></td>
                    <td><?php echo $a->agama ?></td>
                    <td><?php echo $a->wali ?></td>
                <?php endforeach; ?>
                </tr>

                </tr>
            </tbody>
        </table>
        <br><br><br>
    </div>
    <!-- END TABEL -->

</body>

</html>