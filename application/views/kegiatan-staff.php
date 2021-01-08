<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuppChild - Monitoring</title>

    <link rel="stylesheet" href="<?= base_url('assets'); ?>../css/reset.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>../css/kegiatanLsm.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>../css/downloadButton.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500;700&display=swap" rel="stylesheet">
</head>



<!-- TABEL -->
<div class="watermark">
    <img src="<?= base_url('assets'); ?>../assets/img/logo.png" alt="">
</div>

<div class="content">
    <div class="judul">
        <h1>Daftar</h1>
        <span class="line_1"></span>
        <h1>Kegiatan LSM</h1>
        <span class="line_2"></span>
        <button class="downloadButton">
            <a href="<?= base_url('Down/kegiatan'); ?>">Download Data</a>
        </button>
    </div>

    <table cellspacing='0'>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Kegiatan</th>
                <th>Tanggal Pengajuan</th>
                <th>Pengaju</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($kegiatan as $kgt) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $kgt['nama_kegiatan'] ?></td>
                    <td><?= $kgt['tgl_upload'] ?></td>
                    <td><?php if ($kgt['id_daerah'] == 1) {
                            echo 'Gresik';
                        } else if ($kgt['id_daerah'] == 2) {
                            echo 'Bangkalan';
                        } else if ($kgt['id_daerah'] == 3) {
                            echo 'Mojokerto';
                        } else if ($kgt['id_daerah'] == 4) {
                            echo 'Surabaya';
                        } else if ($kgt['id_daerah'] == 5) {
                            echo 'Sidoarjo';
                        } else {
                            echo 'Lamongan';
                        } ?></td>
                    <td><?php if ($kgt['id_status'] == 1) {
                            echo 'diterima';
                        } else if ($kgt['id_status'] == 2) {
                            echo 'ditolak';
                        } else {
                            echo '';
                        }  ?>
                    </td>
                    <td>
                        <button><a style="text-decoration:none;color:white;" href="<?= base_url(); ?>kegiatan_staff/detail/<?= $kgt['id_kegiatan']; ?>">DETAIL</a></button>
                    </td>
                </tr>

                <!-- MODAL HAPUS Kegiatan -->
                <div id="isiHapus" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content-hapus">
                        <h1 class="yakinHapus">Apakah anda yakin ingin menghapus data?</h1>
                        <div class="aksi">
                            <input type="submit" name="batal" class="submit" value="BATAL">
                            <button class="submit"><a class="buttonStyle" href="<?= base_url(); ?>kegiatan/hapus/<?= $kgt['id']; ?>">HAPUS</a></button>
                        </div>
                    </div>
                </div>
                <!-- END EDIT MODAL -->

            <?php endforeach; ?>
        </tbody>
    </table>
    <br><br><br>
</div>
<!-- END TABEL -->

<script>
    // MODAL Hapus
    // Get the modal
    var modalHapus = document.getElementById("isiHapus");
    // Get the button that opens the modal
    var btnHapus = document.getElementById("modalHapus");

    // Get the <span> element that closes the modal
    var spanHapus = document.getElementById("closeHapus");

    // When the user clicks on the button, open the modal
    btnHapus.onclick = function() {
        modalHapus.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    spanHapus.onclick = function() {
        modalHapus.style.display = "none";
    }
</script>

</body>

</html>