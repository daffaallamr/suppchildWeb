<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuppChild - Monitoring</title>

    <link rel="stylesheet" href="<?= base_url('assets'); ?>../css/reset.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>../css/tambahUser.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500;700&display=swap" rel="stylesheet">



    <!-- TABEL -->


    <div class="content">
        <img src="<?= base_url('assets'); ?>../assets/img/logo.png" alt="">
        <center>
            <h1>TAMBAH ANAK</h1>
        </center>
        <br><br><br>

        <form action="" class="profile" method="post">
            <?php foreach ($anak as $anak) : ?>
                <input type="hidden" name="id" value="<?= $anak['id'] ?>">

                <label for="sekarang">Nama</label>
                <input id="sekarang" type="text" name="nama" class="form_login" value="<?= $anak['nama']; ?>">
                <div class="line"></div>

                <label for="baru">NIK</label>
                <input id="baru" type="number" name="nik" class="form_login" value="<?= $anak['nik']; ?>">
                <div class="line"></div>

                <label for="konfirmasi">Tempat Lahir</label>
                <input id="konfirmasi" type="text" name="tempat" class="form_login" value="<?= $anak['tempat_lahir']; ?>">
                <div class="line"></div>

                <label for="konfirmasi">Tanggal Lahir</label>
                <input id="date" type="text" name="tanggal" class="form_login" value="<?= $anak['tgl_lahir']; ?>">
                <div class="line"></div>

                <label for="konfirmasi">Jenis Kelamin</label>
                <select class="form_login" id="cars" name="jenis">
                    <option value="L">L</option>
                    <option value="P">P</option>
                </select>
                <div class="line"></div>

                <label for="konfirmasi">Agama</label>
                <input id="konfirmasi" type="text" name="agama" class="form_login" value="<?= $anak['agama']; ?>">
                <div class="line"></div>

                <label for="konfirmasi">Alamat</label>
                <input id="konfirmasi" type="text" name="alamat" class="form_login" value="<?= $anak['alamat']; ?>">
                <div class="line"></div>

                <label for="konfirmasi">Wali</label>
                <input id="konfirmasi" type="text" name="wali" class="form_login" value="<?= $anak['wali']; ?>">
                <div class="line"></div>

                <label for="konfirmasi">Kesehatan</label>
                <select class="form_login" id="dropDownKesehatan" name="kesehatan">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <div class="line"></div>

                <label for="konfirmasi">Pendidikan</label>
                <select class="form_login" id="dropDownPendidikan" name="pendidikan">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <div class="line"></div>

                <label for="konfirmasi">Ekonomi</label>
                <select class="form_login" id="dropDownEkonomi" name="ekonomi">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
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

            <?php endforeach ?>

            <center>
                <?php if ($this->session->flashdata('pesan') == TRUE) : ?>
                    <div class="alertSalah" role="alert"><?php echo $this->session->flashdata('pesan'); ?></div>
                <?php endif; ?>
            </center>

            <div class="aksi">
                <input type="submit" class="submit" value="UBAH">
            </div>
            <br><br><br>
        </form>
        <br><br><br>

    </div>




    <script>
        selectKesehatan('dropDownKesehatan', <?= $anak['kesehatan']; ?>)

        function selectKesehatan(id, valueToSelect) {
            let element = document.getElementById(id);
            element.value = valueToSelect;
        }

        selectPendidikan('dropDownPendidikan', <?= $anak['pendidikan']; ?>)

        function selectPendidikan(id, valueToSelect) {
            let element = document.getElementById(id);
            element.value = valueToSelect;
        }

        selectEkonomi('dropDownEkonomi', <?= $anak['ekonomi']; ?>)

        function selectEkonomi(id, valueToSelect) {
            let element = document.getElementById(id);
            element.value = valueToSelect;
        }

        selectDaerah('dropDownDaerah', <?= $anak['id_daerah']; ?>)

        function selectDaerah(id, valueToSelect) {
            let element = document.getElementById(id);
            element.value = valueToSelect;
        }
    </script>
    <script src="<?= base_url('assets'); ?>../js/datauser.js"></script>