<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=hasil.xls");
?>

<table cellspacing='0'>
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Kegiatan</th>
            <th>Jenis Kategori</th>
            <th>Deskripsi</th>
            <th>Tanggal Pengajuan</th>

            <th>Pengaju</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($kegiatan as $kgt) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $kgt['nama_kegiatan'] ?></td>
                <td><?php if ($kgt['id_kategori'] == 1) {
                        echo 'Umum';
                    } else if ($kgt['id_kategori'] == 2) {
                        echo 'Internal';
                    } ?></td>
                <td><?= $kgt['deskripsi'] ?></td>
                <td><?= $kgt['tgl_upload'] ?></td>
                <td><?php if ($kgt['id_daerah'] == 1) {
                        echo 'Gresik';
                    } else if ($kgt['id_daerah'] == 2) {
                        echo 'Bangkalan';
                    } else if ($kgt['id_daerah'] == 3) {
                        echo 'Mojokerto';
                    } else if ($kgt['id_daerah'] == 4) {
                        echo 'Surabaya';
                    } else if ($kgt['id_daerah'] == 5) {
                        echo 'Sidoarjo';
                    } else {
                        echo 'Lamongan';
                    } ?></td>
                <td><?php if ($kgt['id_status'] == 1) {
                        echo 'diterima';
                    } else if ($kgt['id_status'] == 2) {
                        echo 'ditolak';
                    } else {
                        echo '';
                    }  ?>
                </td>

            <?php endforeach; ?>
    </tbody>
</table>