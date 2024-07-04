<?php

include 'layout/header.php';

// Mengambil id_kriteria dari URL
$id_kriteria = (int) $_GET['id_kriteria'];

$sub_kriteria = select("SELECT * FROM sub_kriteria WHERE id_kriteria = $id_kriteria")[0];

// Check apakah tombol ubah ditekan
if (isset($_POST['ubah'])){
    if (update_sub_kriteria($_POST) > 0){
        echo "<script>
                alert('Data Table Kriteria Berhasil Diubah');
                document.location.href = 'kriteria.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Table Kriteria Gagal Diubah');
                document.location.href = 'kriteria.php';
              </script>";
    }
}
?>

<div class="container mt-5">
    <h1>Ubah Sub Kriteria</h1>
    <hr>

    <form action="" method="post">
        <input type="hidden" name='id_kriteria' value="<?=$sub_kriteria['id_kriteria']; ?>" >
        <div class="mb-3">
            <label for="alternatif" class="form-label">Alternatif</label>
            <input type="text" class="form-control" id="alternatif" name="alternatif" value="<?=$sub_kriteria['alternatif'];?>"
            placeholder="Alternatif....." required>
        </div>

        <div class="mb-3">
            <label for="nilai_c1" class="form-label">Nilai_C1</label>
            <input type="text" class="form-control" id="nilai_c1" name="nilai_c1" value="<?=$sub_kriteria['nilai_c1'];?>"
            placeholder="Nilai_c1....." required>
        </div>


        <button type="submit" name="ubah" class="btn btn-primary" style="float: right;">Ubah</button>
    </form>
</div>

<?php include 'layout/footer.php'; ?>
