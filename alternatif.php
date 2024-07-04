<?php
include 'layout/header.php';

$data_nilai_alternatif = select("SELECT * FROM nilai_alternatif");
?>

<div class="container mt-5">
    <h1>Table Pengambilan Nilai Alternatif</h1>
    <hr>

    <a href="tambah-nilai-alternatif.php" class="btn btn-primary mb-1">Tambah</a>

    <table class="table table-bordered table-striped mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Obat</th>
                <th>alternatif</th>
                <th>Dosis</th>
                <th>Harga</th>
                <th>Tingkat Efektivitas</th>
                <th>Efek Samping</th>
                <th>Durasi Aktif</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data_nilai_alternatif as $nilai_alternatif) : ?>
            <tr>
                <td><?=$no++;?></td>
                <td><?=$nilai_alternatif['nama_obat'];?></td>
                <td><?=$nilai_alternatif['alternatif'];?></td>
                <td><?=$nilai_alternatif['dosis'];?></td>
                <td><?=$nilai_alternatif['harga'];?></td>
                <td><?=$nilai_alternatif['tingkat_efektivitas'];?></td>
                <td><?=$nilai_alternatif['efek_samping'];?></td>
                <td><?=$nilai_alternatif['durasi_aktif'];?></td>
                <td width="10" class="text-center"> 
                    <a href="ubah-nilai-alternatif.php?id_alternatif=<?= $nilai_alternatif['id_alternatif']; ?>" class="btn btn-success">Ubah</a>
                    <a href="hapus-nilai-alternatif.php?id_alternatif=<?= $nilai_alternatif['id_alternatif']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include 'layout/footer.php'; ?>
