<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuppChild - Monitoring</title>

    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/reset.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/cabangStyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500;700&display=swap" rel="stylesheet">
</head>

<div class="watermark">
    <img src="<?= base_url('assets'); ?>/assets/img/logo.png" alt="">
</div>

<!-- CONTENT -->
<div class="content">
    <div class="judul">
        <h1>Data User SuppChild</h1>
        <span class="line"></span>
    </div>

    <div class="container">
        <a href="<?= base_url('user/useradmin'); ?>" class="box">
            <h1>Admin</h1>
        </a>
        <a href="<?= base_url('user/userpusat'); ?>" class="box">
            <h1>Pusat</h1>
        </a>
        <a href="<?= base_url('user/userdaerah'); ?>" class="box">
            <h1>Daerah</h1>
        </a>
    </div>

</div>
<!-- END CONTENT -->