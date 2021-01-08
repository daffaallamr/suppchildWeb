<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuppChild - Monitoring</title>

    <link rel="stylesheet" href="<?= base_url('assets'); ?>../css/reset.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>../css/cabangStyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500;700&display=swap" rel="stylesheet">
</head>

<div class="watermark">
    <img src="<?= base_url('assets'); ?>../assets/img/logo.png" alt="">
</div>

<!-- CONTENT -->
<div class="content">
    <div class="judul">
        <h1>Data Anak Binaan Daerah</h1>
        <span class="line"></span>
    </div>

    <div class="container">
        <a href="<?= base_url(); ?>anakGresik_pusat" class="box">
            <h1>Gresik</h1>
            <h1><?php echo $grsk;?> Anak</h1>
        </a>
        <a href="<?= base_url(); ?>anakBangkalan_pusat" class="box">
            <h1>Bangkalan</h1>
            <h1><?php echo $bang;?>  Anak</h1>
        </a>
        <a href="<?= base_url(); ?>anakMojokerto_pusat" class="box">
            <h1>Mojokerto</h1>
            <h1><?php echo $mjk;?>  Anak</h1>
        </a>
        <a href="<?= base_url(); ?>anakSurabaya_pusat" class="box">
            <h1>Surabaya</h1>
            <h1><?php echo $sby;?>  Anak</h1>
        </a>
        <a href="<?= base_url(); ?>anakSidoarjo_pusat" class="box">
            <h1>Sidoarjo</h1>
            <h1><?php echo $sda;?>  Anak</h1>
        </a>
        <a href="<?= base_url(); ?>anakLamongan_pusat" class="box">
            <h1>Lamongan</h1>
            <h1><?php echo $lmg;?>  Anak</h1>
        </a>
    </div>

</div>
<!-- END CONTENT -->