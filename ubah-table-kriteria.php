<?php

include 'layout/header.php';

// Mengambil id_obat dari URL
$id_obat = (int) $_GET['id_obat'];

$table_kriteria = select("SELECT * FROM table_kriteria WHERE id_obat = $id_obat")[0];

// Check apakah tombol ubah ditekan
if (isset($_POST['ubah'])){
    if (update_table_kriteria($_POST) > 0){
        echo "<script>
                alert('Data Table Kriteria Berhasil Diubah');
                document.location.href = 'index.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Table Kriteria Gagal Diubah');
                document.location.href = 'index.php';
              </script>";
    }
}
?>

<div class="container mt-5">
    <h1>Ubah Kriteria</h1>
    <hr>

    <form action="" method="post">
        <input type="hidden" name='id_obat' value="<?=$table_kriteria['id_obat']; ?>" >
        <div class="mb-3">
            <label for="kode" class="form-label">Kode</label>
            <input type="text" class="form-control" id="kode" name="kode" value="<?=$table_kriteria['kode'];?>"
            placeholder="Kode....." required>
        </div>

        <div class="mb-3">
            <label for="kriteria" class="form-label">Kriteria</label>
            <input type="text" class="form-control" id="kriteria" name="kriteria" value="<?=$table_kriteria['kriteria'];?>"
            placeholder="Kriteria....." required>
        </div>

        <div class="mb-3">
            <label for="tipe" class="form-label">Tipe</label>
            <input type="text" class="form-control" id="tipe" name="tipe" value="<?=$table_kriteria['tipe'];?>"
            placeholder="Tipe....." required>
        </div>

        <div class="mb-3">
            <label for="bobot" class="form-label">Bobot</label>
            <input type="text" class="form-control" id="bobot" name="bobot" value="<?=$table_kriteria['bobot'];?>"
            placeholder="Bobot....." required>
        </div>

        <button type="submit" name="ubah" class="btn btn-primary" style="float: right;">Ubah</button>
    </form>
</div>

<?php include 'layout/footer.php'; ?>
