<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=hasil.xls");
?>

<table cellspacing='0'>
    <thead>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>NIK</th>
            <th>L/P</th>
            <th>TTL</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>Wali</th>
            <th>Kesehatan</th>
            <th>Pendidikan</th>
            <th>Ekonomi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php
            $no = 1;
            foreach ($anak as $a) : ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?php echo $a->nama ?></td>
            <td><?php echo $a->nik ?></td>
            <td><?php echo $a->jenis_kelamin ?></td>
            <td><?php echo $a->tempat_lahir, ", ", $a->tgl_lahir ?></td>
            <td><?php echo $a->alamat ?></td>
            <td><?php echo $a->agama ?></td>
            <td><?php echo $a->wali ?></td>
            <td><?php echo $a->kesehatan ?></td>
            <td><?php echo $a->pendidikan ?></td>
            <td><?php echo $a->ekonomi ?></td>
        <?php endforeach; ?>
        </tr>

        </tr>
    </tbody>
</table>