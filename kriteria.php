<?php
include 'layout/header.php';

// Mengambil data dari database
$data_sub_kriteria = select("SELECT * FROM sub_kriteria ORDER BY id_kriteria DESC");

?>

<div class="container mt-5">
    <h1>Sub Kriteria C1 </h1>
    <hr>

    <a href="tambah-sub-kriteria.php" class="btn btn-primary mb-1">Tambah</a>

    <table class="table table-bordered table-striped mt-3" id="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Alternatif</th>
                <th>Nilai C1</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
           <?php $no = 1; ?>
           <?php foreach ($data_sub_kriteria as $sub_kriteria): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $sub_kriteria['alternatif']; ?></td>
                    <td><?= $sub_kriteria['nilai_c1']; ?></td>
                    <td class="text-center" width="15%">
                        <a href="ubah-sub-kriteria.php?id_kriteria=<?= $sub_kriteria['id_kriteria']; ?>" class="btn btn-success">Ubah</a>
                        <a href="hapus-sub-kriteria.php?id_kriteria=<?= $sub_kriteria['id_kriteria']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
           <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include 'layout/footer.php'; ?>
