<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SuppChild - Monitoring</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets'); ?>../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets'); ?>../css/loginStyle.css" rel="stylesheet">

</head>

<body>

    <!-- login page -->
    <div class="container">
        <div class="pict"></div>
        <div class="right">
            <div class="img">
                <img src="<?php echo base_url('assets'); ?>/assets/img/logo.png">
            </div>
            <div class="form">
                <form method="post" action="<?= base_url('authadmin') ?>">
                    <label for="username">Username</label>
                    <input id="username" type="text" name="username" class="form_login" value="<?= set_value('username') ?>">
                    <div class="line"></div>



                    <label for="password">Password</label>
                    <input type="password" class="form_login" id="password" name="password">
                    <div class="line-2"></div>

                    <div>
                        <?php if ($this->session->flashdata('pesan') == TRUE) : ?>
                            <div class="alertSalah" role="alert"><?php echo $this->session->flashdata('pesan'); ?></div>
                        <?php endif; ?>
                    </div>

                    <button type="submit" href="" class="submit">
                        MASUK
                    </button>
                    <!--<input type="submit" name="submit" class="submit" value="MASUK">-->
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets'); ?>../vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets'); ?>../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets'); ?>../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets'); ?>../js/sb-admin-2.min.js"></script>

</body>

</html>