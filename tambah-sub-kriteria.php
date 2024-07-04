<?php

include 'layout/header.php';

// Cek apakah tombol tambah ditekan
if (isset($_POST['tambah'])) {
    if (create_sub_kriteria($_POST) > 0) {
        echo "<script>
                alert('Data Sub Kriteria Berhasil Ditambahkan');
                document.location.href = 'kriteria.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Sub Kriteria Gagal Ditambahkan');
                document.location.href = 'kriteria.php';
            </script>";
    }
}

?>

<div class="container mt-5">
   <h1>Tambah Sub Kriteria C1</h1>
   <hr>

   <form action="" method="post">
        <div class="mb-3">
             <label for="alternatif" class="form-label">Alternatif</label>
             <input type="text" class="form-control" id="alternatif" name="alternatif" placeholder="alternatif..." required>
        </div>

        <div class="mb-3">
             <label for="nilai_c1" class="form-label">Nilai C1</label>
             <input type="text" class="form-control" id="nilai_c1" name="nilai_c1" placeholder="nilai c1..." required>
        </div>

        <button type="submit" name="tambah" class="btn btn-primary" style="float: right;">Tambah</button>
   </form>
</div>

<?php include 'layout/footer.php'; ?>
