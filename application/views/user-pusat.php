<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuppChild - Monitoring</title>

    <link rel="stylesheet" href="<?= base_url('assets'); ?>../css/reset.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>../css/dataUserRapi.css" <?php echo date('l jS \of F Y h:i:s A'); ?>>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500;700&display=swap" rel="stylesheet">



    <!-- TABEL -->
    <div class="watermark">
        <img src="<?= base_url('assets'); ?>../assets/img/logo.png" alt="">
    </div>

    <div class="content">
        <div class="judul">
            <h1>Data User</h1>
            <span class="line"></span>
            <button class="buttonTambah">
                <a href="<?= base_url('UserAdd/tambahPusat'); ?>">Tambah user+</a>
            </button>
        </div>


        <table cellspacing='0'>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($user as $user) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $user['nama_staffpusat'] ?></td>
                        <td><?= $user['username'] ?></td>
                        <td><?= $user['password'] ?></td>
                        <td>
                            <button><a href="<?= base_url(); ?>user/ubahpusat/<?= $user['id_staffpusat']; ?>">UBAH</a></button>
                            <button id="modalHapus<?= $user['id_staffpusat']; ?>">HAPUS</button>
                            <!-- MODAL HAPUS User -->
                            <div id="isiHapus<?= $user['id_staffpusat']; ?>" class="modal">

                                <!-- Modal content -->
                                <div class="modal-content-hapus">
                                    <h1 class="yakinHapus">Apakah anda yakin ingin menghapus user?</h1>
                                    <div class="aksi">
                                        <button class="buttonHapus"><a class="aHapus" href="<?= base_url(); ?>User/hapusPusat/<?= $user['id_staffpusat']; ?>">HAPUS</a></button>
                                        <input type="submit" name="batal" class="submit" id="closeHapus<?= $user['id_staffpusat']; ?>" value="BATAL">
                                    </div>
                                </div>
                            </div>
                            <!-- END HAPUS USER -->
                            <script>
                                // MODAL Hapus
                                // Get the modal
                                var modalHapus<?= $user['id_staffpusat']; ?> = document.getElementById("isiHapus<?= $user['id_staffpusat']; ?>");
                                // Get the button that opens the modal
                                var btnHapus<?= $user['id_staffpusat']; ?> = document.getElementById("modalHapus<?= $user['id_staffpusat']; ?>");

                                // Get the <span> element that closes the modal
                                var spanHapus<?= $user['id_staffpusat']; ?> = document.getElementById("closeHapus<?= $user['id_staffpusat']; ?>");

                                // When the user clicks on the button, open the modal
                                btnHapus<?= $user['id_staffpusat']; ?>.onclick = function() {
                                    modalHapus<?= $user['id_staffpusat']; ?>.style.display = "block";
                                }

                                // When the user clicks on <span> (x), close the modal
                                spanHapus<?= $user['id_staffpusat']; ?>.onclick = function() {
                                    modalHapus<?= $user['id_staffpusat']; ?>.style.display = "none";
                                }
                            </script>
                        </td>
                    <?php endforeach; ?>
                    </tr>
            </tbody>
        </table>
        <br><br><br>
    </div>
    <!-- END TABEL -->