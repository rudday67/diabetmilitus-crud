<?php
include 'layout/header.php';

$data_tbl_perangkingan = select("SELECT * FROM tbl_perangkingan");
?>

<div class="container mt-5">
    <h1>Table Perangkingan</h1>
    <hr>

    <a href="tambah-perangkingan.php" class="btn btn-primary mb-1">Tambah</a>

    <table class="table table-bordered table-striped mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Obat</th>
                <th>alternatif</th>
                <th>Skor Total (Yi)</th>
                <th>Rangking</th>
                <th>Aksi</th>
            </tr>
        </thead> 

        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data_tbl_perangkingan as $tbl_perangkingan) : ?>
            <tr>
                <td><?=$no++;?></td>
                <td><?=$tbl_perangkingan['nama_obat'];?></td>
                <td><?=$tbl_perangkingan['alternatif'];?></td>
                <td><?=$tbl_perangkingan['skor_total'];?></td>
                <td><?=$tbl_perangkingan['rangking'];?></td>
                <td width="10" class="text-center"> 
                    <a href="ubah-perangkingan.php?id_perangkingan=<?= $tbl_perangkingan['id_perangkingan']; ?>" class="btn btn-success">Ubah</a>
                    <a href="hapus-perangkingan.php?id_perangkingan=<?= $tbl_perangkingan['id_perangkingan']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include 'layout/footer.php'; ?>
