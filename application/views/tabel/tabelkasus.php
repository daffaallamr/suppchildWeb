<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=hasil.xls");
?>

<table cellspacing='0'>
    <thead>
        <tr>
            <th>#</th>
            <th>Nama Kasus</th>
            <th>Tempat</th>
            <th>Deskripsi</th>
            <th>Daerah</th>
            <th>Tgl pelaporan</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($kasus as $kasus) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $kasus['nama'] ?></td>
                <td><?= $kasus['tempat'] ?></td>
                <td><?= $kasus['detail'] ?></td>
                <td><?php if ($kasus['id_daerah'] == 1) {
                        echo 'Gresik';
                    } else if ($kasus['id_daerah'] == 2) {
                        echo 'Bangkalan';
                    } else if ($kasus['id_daerah'] == 3) {
                        echo 'Mojokerto';
                    } else if ($kasus['id_daerah'] == 4) {
                        echo 'Surabaya';
                    } else if ($kasus['id_daerah'] == 5) {
                        echo 'Sidoarjo';
                    } else {
                        echo 'Lamongan';
                    } ?></td>
                <td><?= $kasus['tgl_upload'] ?></td>
                <td><?= $kasus['status'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>