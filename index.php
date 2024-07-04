<?php
include 'layout/header.php';

$data_table_kriteria = select("SELECT * FROM table_kriteria");
?>

<div class="container mt-5">
    <h1>Table Nilai Kriteria</h1>
    <hr>

    <a href="tambah-table-kriteria.php" class="btn btn-primary mb-1">Tambah</a>

    <table class="table table-bordered table-striped mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Kriteria</th>
                <th>Tipe</th>
                <th>Bobot</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data_table_kriteria as $table_kriteria) : ?>
            <tr>
                <td><?=$no++;?></td>
                <td><?=$table_kriteria['kode'];?></td>
                <td><?=$table_kriteria['kriteria'];?></td>
                <td><?=$table_kriteria['tipe'];?></td>
                <td><?=$table_kriteria['bobot'];?></td>
                <td width="15" class="text-center"> 
                    <a href="ubah-table-kriteria.php?id_obat=<?=$table_kriteria['id_obat']; ?>" class="btn btn-success">Ubah</a>
                    <a href="hapus-table-kriteria.php?id_obat=<?=$table_kriteria['id_obat']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include 'layout/footer.php'; ?>
