<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuppChild - Monitoring</title>

    <link rel="stylesheet" href="<?= base_url('assets'); ?>../css/reset.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>../css/listAnakDaerah.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500;700&display=swap" rel="stylesheet">

<body>
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
                <h1>Anak Binaan</h1>
                <span class="line_1"></span>
                <h1>Cabang Lamongan</h1>
                <span class="line_gresik2"></span>
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
                        <th>Aksi</th>
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
                        <td>
                            <button style="background-color:lightGreen;"><a style="text-decoration:none;color:white;" href="<?= base_url(); ?>AnakLamongan/detail/<?= $a->id; ?>">DETAIL</a></button>
                            <button style="background-color:#fe8f57;"><a style="text-decoration:none;color:white;" href="<?= base_url(); ?>AnakLamongan/ubah/<?= $a->id; ?>">UBAH</a></button>
                            <button style="background-color:#d9534f;" id="modalHapus<?= $a->id; ?>">HAPUS</button>
                            <!-- MODAL HAPUS User -->
                            <div id="isiHapus<?= $a->id; ?>" class="modal">

                                <!-- Modal content -->
                                <div class="modal-content-hapus">
                                    <h1 class="yakinHapus">Apakah anda yakin ingin menghapus user?</h1>
                                    <div class="aksi">
                                        <button class="submitButton"><a href="<?= base_url(); ?>anakLamongan/hapus/<?= $a->id; ?>">HAPUS</a></button>
                                        <input type="submit" name="batal" class="submit" id="closeHapus<?= $a->id; ?>" value="BATAL">
                                    </div>
                                </div>
                            </div>
                            <!-- END HAPUS USER -->
                            <script>
                                // MODAL Hapus
                                // Get the modal
                                var modalHapus<?= $a->id; ?> = document.getElementById("isiHapus<?= $a->id; ?>");
                                // Get the button that opens the modal
                                var btnHapus<?= $a->id; ?> = document.getElementById("modalHapus<?= $a->id; ?>");

                                // Get the <span> element that closes the modal
                                var spanHapus<?= $a->id; ?> = document.getElementById("closeHapus<?= $a->id; ?>");

                                // When the user clicks on the button, open the modal
                                btnHapus<?= $a->id; ?>.onclick = function() {
                                    modalHapus<?= $a->id; ?>.style.display = "block";
                                }

                                // When the user clicks on <span> (x), close the modal
                                spanHapus<?= $a->id; ?>.onclick = function() {
                                    modalHapus<?= $a->id; ?>.style.display = "none";
                                }
                            </script>
                        </td>
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