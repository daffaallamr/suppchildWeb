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
            <h1>Cabang Bangkalan</h1>
            <span class="line_2"></span>
            <button class="downloadButton">
                <a href="<?= base_url('Down/bangkalan'); ?>">Download data</a>
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

    <!-- MODAL HAPUS Anak -->
    <div id="isiHapus" class="modal">

        <!-- Modal content -->
        <div class="modal-content-hapus">
            <h1 class="yakinHapus">Apakah anda yakin ingin menghapus data?</h1>
            <div class="aksi">
                <button class="submitButton"><a href="<?= base_url(); ?>anakBangkalan/hapus/<?= $a->id; ?>">HAPUS</a></button>
                <input id="closeHapusModal" type="submit" name="batal" class="submit" value="BATAL">
            </div>
        </div>
    </div>
    <!-- END EDIT MODAL -->

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