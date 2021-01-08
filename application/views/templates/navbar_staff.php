<body>

    <!-- NAVBAR -->
    <div class="header">
        <ul>
            <li><a href="<?= base_url(); ?>home_staff">Beranda</a></li>
            <li><a href="<?= base_url(); ?>Cabang_staff">Data Anak</a></li>
            <li><a href="<?= base_url(); ?>Kegiatan_staff">Data Kegiatan</a></li>
            <li><a href="<?= base_url(); ?>Laporan_staff">Laporan</a></li>
            <li><a href="<?= base_url(); ?>profil_staff">Profil</a></li>
        </ul>
        <div class="logo">
            <form action="<?= base_url('cari_staff') ?>" method="post">
                <input class="search" type="text" placeholder="Cari ..." name="keyword">
                <button class="searchButton" type="submit">Cari</button>
            </form>
        </div>
    </div>
    <!-- END NAVBAR -->