<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuppChild - Monitoring</title>

    <link rel="stylesheet" href="<?= base_url('assets'); ?>../css/reset.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>../css/editPassword.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500;700&display=swap" rel="stylesheet">




    <!-- CONTENT -->
    <div class="content">
        <img src="<?= base_url('assets'); ?>../assets/img/logo.png" alt="">

        <form class="profile" method="post" action="<?= base_url('profil_edit') ?>">
                <br>
                <label for="sekarang">Password Sekarang</label>
                <input id="sekarang" type="password" name="current_password" class="form_login">
                <div class="line"></div>

                <label for="baru">Password Baru</label>
                <input id="baru" type="password" name="new_password" class="form_login">
                <div class="line"></div>

                <label for="konfirmasi">Konfirmasi Password Baru</label>
                <input id="konfirmasi" type="password" name="repeat_password" class="form_login">
                <div class="line"></div>
                <div>
                    <?php if ($this->session->flashdata('pesan') == TRUE) : ?>
                        <div class="alertSalah" role="alert"><?php echo $this->session->flashdata('pesan'); ?></div>
                    <?php endif; ?>
                </div>

            <div class="aksi">
                <input type="submit" class="submit" value="UBAH">
            </div>
        </form>
        <br><br><br><br><br>
    </div>
    <!-- END CONTENT -->

    <!-- SCRIPT GO BACK -->
    <script>
        function goBack() {
            window.history.back();
        }
    </script>

    </body>

</html>