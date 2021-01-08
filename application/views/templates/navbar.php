<body>

    <!-- NAVBAR -->
    <div class="header">
        <ul>
            <li><a href="<?= base_url(); ?>home">Beranda</a></li>
            <li><a href="<?= base_url(); ?>User">Data Akun</a></li>
            <li><a href="<?= base_url(); ?>Cabang">Data Anak</a></li>
            <li><a href="<?= base_url(); ?>Kegiatan">Data Kegiatan</a></li>
            <li><a href="<?= base_url(); ?>laporan">Laporan</a></li>
            <li><a href="<?= base_url(); ?>profil">Profil</a></li>
        </ul>
        <div class="logo">
            <form action="<?= base_url('cari') ?>" method="post">
                <input class="search" type="text" placeholder="Cari ..." name="keyword">
                <button class="searchButton" type="submit">Cari</button>
            </form>
        </div>
    </div>
    <!-- END NAVBAR -->