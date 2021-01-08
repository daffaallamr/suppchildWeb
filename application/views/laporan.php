<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuppChild - Monitoring</title>

    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/reset.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/kegiatanMboh.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>../css/downloadButton.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500;700&display=swap" rel="stylesheet">


    <!-- TABEL -->
    <div class="watermark">
        <img src="<?= base_url('assets'); ?>/assets/img/logo.png" alt="">
    </div>

    <div class="content">
        <div class="judul">
            <h1>Data</h1>
            <span class="line_1"></span>
            <h1>Laporan Kasus</h1>
            <span class="line_2"></span>
            <button class="downloadButton">
                <a href="<?= base_url('LaporanTambah'); ?>">Tambah Data</a>
            </button>
        </div>

        <table cellspacing='0'>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Kasus</th>
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
                        <td><?= $kasus['status'] ?></td>
                        <td>
                            <button style="background-color:lightGreen;"><a style="text-decoration:none;color:white;" href="<?= base_url(); ?>laporan/detail/<?= $kasus['id']; ?>">DETAIL</a></button>
                            <button style="background-color:#fe8f57;"><a style="text-decoration:none;color:white;" href="<?= base_url(); ?>laporan/ubah/<?= $kasus['id']; ?>">UBAH</a></button>
                            <button style="background-color:#d9534f;"id="modalHapus<?= $kasus['id']; ?>">HAPUS</button>
                            <!-- MODAL HAPUS User -->
                            <div id="isiHapus<?= $kasus['id']; ?>" class="modal">

                                <!-- Modal content -->
                                <div class="modal-content-hapus">
                                    <h1 class="yakinHapus">Apakah anda yakin ingin menghapus user?</h1>
                                    <div class="aksi">
                                        <button class="submitButton"><a href="<?= base_url(); ?>laporan/hapus/<?= $kasus['id']; ?>">HAPUS</a></button>
                                        <input type="submit" name="batal" class="submit" id="closeHapus<?= $kasus['id']; ?>" value="BATAL">
                                    </div>
                                </div>
                            </div>
                            <!-- END HAPUS USER -->
                            <script>
                                // MODAL Hapus
                                // Get the modal
                                var modalHapus<?= $kasus['id']; ?> = document.getElementById("isiHapus<?= $kasus['id']; ?>");
                                // Get the button that opens the modal
                                var btnHapus<?= $kasus['id']; ?> = document.getElementById("modalHapus<?= $kasus['id']; ?>");

                                // Get the <span> element that closes the modal
                                var spanHapus<?= $kasus['id']; ?> = document.getElementById("closeHapus<?= $kasus['id']; ?>");

                                // When the user clicks on the button, open the modal
                                btnHapus<?= $kasus['id']; ?>.onclick = function() {
                                    modalHapus<?= $kasus['id']; ?>.style.display = "block";
                                }

                                // When the user clicks on <span> (x), close the modal
                                spanHapus<?= $kasus['id']; ?>.onclick = function() {
                                    modalHapus<?= $kasus['id']; ?>.style.display = "none";
                                }
                            </script>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <br><br><br>
    </div>
    <!-- END TABEL -->