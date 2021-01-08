<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuppChild - Monitoring</title>

    <link rel="stylesheet" href="<?= base_url('assets'); ?>../css/reset.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>../css/kegiatanMboh.css">
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
            <a href="<?= base_url('KegiatanTambah'); ?>">Tambah Data</a>
        </button>
    </div>

    <table cellspacing='0'>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Kegiatan</th>
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
                    <td><?php if ($kgt['id_status'] == 1) {
                            echo 'diterima';
                        } else if ($kgt['id_status'] == 2) {
                            echo 'ditolak';
                        } else {
                            echo '';
                        }  ?>
                    </td>
                    <td>
                        <button style="background-color:lightGreen;"><a style="text-decoration:none;color:white;" href="<?= base_url(); ?>kegiatan/detail/<?= $kgt['id_kegiatan']; ?>">DETAIL</a></button>
                        <button style="background-color:#fe8f57;"><a style="text-decoration:none;color:white;" href="<?= base_url(); ?>kegiatan/ubah/<?= $kgt['id_kegiatan']; ?>">UBAH</a></button>
                        <button style="background-color:#d9534f;" id="modalHapus<?= $kgt['id_kegiatan']; ?>">HAPUS</button>
                        <!-- MODAL HAPUS User -->
                        <div id="isiHapus<?= $kgt['id_kegiatan']; ?>" class="modal">

                            <!-- Modal content -->
                            <div class="modal-content-hapus">
                                <h1 class="yakinHapus">Apakah anda yakin ingin menghapus user?</h1>
                                <div class="aksi">
                                    <button class="submitButton"><a href="<?= base_url(); ?>kegiatan/hapus/<?= $kgt['id_kegiatan']; ?>">HAPUS</a></button>
                                    <input type="submit" name="batal" class="submit" id="closeHapus<?= $kgt['id_kegiatan']; ?>" value="BATAL">
                                </div>
                            </div>
                        </div>
                        <!-- END HAPUS USER -->
                        <script>
                            // MODAL Hapus
                            // Get the modal
                            var modalHapus<?= $kgt['id_kegiatan']; ?> = document.getElementById("isiHapus<?= $kgt['id_kegiatan']; ?>");
                            // Get the button that opens the modal
                            var btnHapus<?= $kgt['id_kegiatan']; ?> = document.getElementById("modalHapus<?= $kgt['id_kegiatan']; ?>");

                            // Get the <span> element that closes the modal
                            var spanHapus<?= $kgt['id_kegiatan']; ?> = document.getElementById("closeHapus<?= $kgt['id_kegiatan']; ?>");

                            // When the user clicks on the button, open the modal
                            btnHapus<?= $kgt['id_kegiatan']; ?>.onclick = function() {
                                modalHapus<?= $kgt['id_kegiatan']; ?>.style.display = "block";
                            }

                            // When the user clicks on <span> (x), close the modal
                            spanHapus<?= $kgt['id_kegiatan']; ?>.onclick = function() {
                                modalHapus<?= $kgt['id_kegiatan']; ?>.style.display = "none";
                            }
                        </script>
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
    <br><br><br>
</div>

</body>

</html>