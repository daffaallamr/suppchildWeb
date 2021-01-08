<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuppChild - Monitoring</title>

    <link rel="stylesheet" href="<?= base_url('assets'); ?>../css/reset.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>../css/editUser.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500;700&display=swap" rel="stylesheet">



    <!-- TABEL -->
    <div class="content" style="height: 800px;">
        <img src="<?= base_url('assets'); ?>../assets/img/logo.png" alt="">
        <center>
            <h1>SUNTING USER</h1>
        </center>
        <br><br><br>

        <form action="" class="profile" method="post">
            <?php foreach ($user as $user) : ?>
                <input type="hidden" name="id" value="<?= $user['id_staffdaerah'] ?>">


                <label for="sekarang">Nama</label>
                <input id="sekarang" type="text" name="nama" class="form_login" value="<?= $user['nama_staffdaerah']; ?>">
                <div class="line"></div>

                <label for="baru">Username</label>
                <input id="baru" type="text" name="username" class="form_login" value="<?= $user['username']; ?>">
                <div class="line"></div>

                <label for="konfirmasi">Password</label>
                <input id="konfirmasi" type="text" name="password" class="form_login" value="<?= $user['password']; ?>">
                <div class="line"></div>

                <label for="baru">Daerah Pengguna</label>
                <select class="form_login" id="dropDownDaerah" name="daerah">
                    <option value="1">Gresik</option>
                    <option value="2">Bangkalan</option>
                    <option value="3">Mojokerto</option>
                    <option value="4">Surabaya</option>
                    <option value="5">Sidoarjo</option>
                    <option value="6">Lamongan</option>
                </select>
                <div class="line"></div>
            <?php endforeach ?>

            <center>
                <?php if ($this->session->flashdata('pesan') == TRUE) : ?>
                    <div class="alertSalah" role="alert"><?php echo $this->session->flashdata('pesan'); ?></div>
                <?php endif; ?>
            </center>

            <div class="aksi">
                <input type="submit" class="submit" value="SUNTING">
                <a href="user/index" type="submit" class="submit" value="BATAL"></a>
            </div>
            <br><br><br>
        </form>
        <br><br><br>
    </div>





    <script src="<?= base_url('assets'); ?>../js/datauser.js"></script>
    <script>
        selectDaerah('dropDownDaerah', <?= $user['id_daerah']; ?>)

        function selectDaerah(id, valueToSelect) {
            let element = document.getElementById(id);
            element.value = valueToSelect;
        }
    </script>