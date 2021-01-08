<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuppChild - Monitoring</title>

    <link rel="stylesheet" href="<?= base_url('assets'); ?>../css/reset.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>../css/tambahLaporan.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500;700&display=swap" rel="stylesheet">



    <!-- TABEL -->


    <div class="content">
        <img src="<?= base_url('assets'); ?>../assets/img/logo.png" alt="">
        <center>
            <h1>UBAH LAPORAN</h1>
        </center>
        <br><br><br>

        <form action="" class="profile" method="post">
            <?php foreach ($kasus as $kasus) : ?>
                <input type="hidden" name="id" value="<?= $kasus['id'] ?>">

                <label for="sekarang">Nama Korban</label>
                <input id="sekarang" type="text" name="nama" class="form_login" value="<?= $kasus['nama']; ?>">
                <div class="line"></div>

                <label for="baru">Tempat Kejadian</label>
                <input id="baru" type="text" name="tempat" class="form_login" value="<?= $kasus['tempat']; ?>">
                <div class="line"></div>

                <label for="konfirmasi">Deskripsi Singkat</label>
                <input id="konfirmasi" type="text" name="detail" class="form_login" value="<?= $kasus['detail']; ?>">
                <div class="line"></div>

                <label for="konfirmasi">Daerah</label>
                <select class="form_login" id="dropDownDaerah" name="daerah">
                    <option value="1">Gresik</option>
                    <option value="2">Bangkalan</option>
                    <option value="3">Mojokerto</option>
                    <option value="4">Surabaya</option>
                    <option value="5">Sidoarjo</option>
                    <option value="6">Lamongan</option>
                </select>
                <div class="line"></div>

                <label for="konfirmasi">Status</label>
                <select class="form_login" id="cars" name="status">
                    <?php foreach ($status as $s) : ?>
                        <?php if ($s == $kasus['status']) : ?>
                            <option value="<?= $s; ?>" selected><?= $s; ?></option>
                        <?php else : ?>
                            <option value="<?= $s; ?>"><?= $s; ?></option>
                        <?php endif; ?>
                    <?php endforeach ?>
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
            </div>
            <br><br><br>
        </form>
        <br><br><br>

    </div>

    <script>
        selectDaerah('dropDownDaerah', <?= $kasus['id_daerah']; ?>)

        function selectDaerah(id, valueToSelect) {
            let element = document.getElementById(id);
            element.value = valueToSelect;
        }
    </script>