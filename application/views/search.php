<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuppChild - Monitoring</title>

    <link rel="stylesheet" href="<?= base_url('assets'); ?>../css/reset.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>../css/listAnakCabang.css">
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
                    <th>Aksi</th>
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
                    <td>
                        <button id="modalHapus<?= $anak['id']; ?>">HAPUS</button>
                        <!-- MODAL HAPUS User -->
                        <div id="isiHapus<?= $anak['id']; ?>" class="modal">

                            <!-- Modal content -->
                            <div class="modal-content-hapus">
                                <h1 class="yakinHapus">Apakah anda yakin ingin menghapus user?</h1>
                                <div class="aksi">
                                    <button class="submitButton"><a href="<?= base_url(); ?>Cari/hapus/<?= $anak['id']; ?>">HAPUS</a></button>
                                    <input type="submit" name="batal" class="submit" id="closeHapus<?= $anak['id']; ?>" value="BATAL">
                                </div>
                            </div>
                        </div>
                        <!-- END HAPUS USER -->
                        <script>
                            // MODAL Hapus
                            // Get the modal
                            var modalHapus<?= $anak['id']; ?> = document.getElementById("isiHapus<?= $anak['id']; ?>");
                            // Get the button that opens the modal
                            var btnHapus<?= $anak['id']; ?> = document.getElementById("modalHapus<?= $anak['id']; ?>");

                            // Get the <span> element that closes the modal
                            var spanHapus<?= $anak['id']; ?> = document.getElementById("closeHapus<?= $anak['id']; ?>");

                            // When the user clicks on the button, open the modal
                            btnHapus<?= $anak['id']; ?>.onclick = function() {
                                modalHapus<?= $anak['id']; ?>.style.display = "block";
                            }

                            // When the user clicks on <span> (x), close the modal
                            spanHapus<?= $anak['id']; ?>.onclick = function() {
                                modalHapus<?= $anak['id']; ?>.style.display = "none";
                            }
                        </script>
                    </td>
                </tr>
            <?php endforeach; ?>

            </tr>
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

        // Get the <span> element that closes the modal
        var spanHapusModal = document.getElementById("closeHapusModal");

        // When the user clicks on the button, open the modal
        btnHapus.onclick = function() {
            modalHapus.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        spanHapusModal.onclick = function() {
            modalHapus.style.display = "none";
        }
    </script>

</body>

</html>