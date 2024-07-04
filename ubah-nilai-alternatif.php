<?php

include 'layout/header.php';

// Mengambil id_alternatif dari URL
$id_alternatif = (int) $_GET['id_alternatif'];

// Ambil data alternatif berdasarkan id_alternatif
$nilai_alternatif = select("SELECT * FROM nilai_alternatif WHERE id_alternatif = $id_alternatif");
if (!$nilai_alternatif) {
    echo "<script>
            alert('Data Alternatif Tidak Ditemukan');
            document.location.href = 'alternatif.php';
          </script>";
    exit;
}
$nilai_alternatif = $nilai_alternatif[0];

// Cek apakah tombol ubah ditekan
if (isset($_POST['ubah'])){
    if (update_nilai_alternatif($_POST) > 0){
        echo "<script>
                alert('Data Nilai Alternatif Berhasil Diubah');
                document.location.href = 'alternatif.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Nilai Alternatif Gagal Diubah');
                document.location.href = 'alternatif.php';
              </script>";
    }
}
?>

<div class="container mt-5">
    <h1>Ubah Nilai Alternatif</h1>
    <hr>

    <form action="" method="post">
        <input type="hidden" name="id_alternatif" value="<?=$nilai_alternatif['id_alternatif'];?>">
        <div class="mb-3">
            <label for="nama_obat" class="form-label">Nama Obat</label>
            <input type="text" class="form-control" id="nama_obat" name="nama_obat" value="<?=$nilai_alternatif['nama_obat'];?>" placeholder="Nama Obat....." required>
        </div>

        <div class="mb-3">
            <label for="alternatif" class="form-label">Alternatif</label>
            <input type="text" class="form-control" id="alternatif" name="alternatif" value="<?=$nilai_alternatif['alternatif'];?>" placeholder="Alternatif....." required>
        </div>

        <div class="mb-3">
            <label for="dosis" class="form-label">Dosis</label>
            <input type="text" class="form-control" id="dosis" name="dosis" value="<?=$nilai_alternatif['dosis'];?>" placeholder="Dosis....." required>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" value="<?=$nilai_alternatif['harga'];?>" placeholder="Harga....." required>
        </div>

        <div class="mb-3">
            <label for="tingkat_efektivitas" class="form-label">Tingkat Efektivitas</label>
            <input type="text" class="form-control" id="tingkat_efektivitas" name="tingkat_efektivitas" value="<?=$nilai_alternatif['tingkat_efektivitas'];?>" placeholder="Tingkat Efektivitas....." required>
        </div>

        <div class="mb-3">
            <label for="efek_samping" class="form-label">Efek Samping</label>
            <input type="text" class="form-control" id="efek_samping" name="efek_samping" value="<?=$nilai_alternatif['efek_samping'];?>" placeholder="Efek Samping....." required>
        </div>

        <div class="mb-3">
            <label for="durasi_aktif" class="form-label">Durasi Aktif</label>
            <input type="text" class="form-control" id="durasi_aktif" name="durasi_aktif" value="<?=$nilai_alternatif['durasi_aktif'];?>" placeholder="Durasi Aktif....." required>
        </div>

        <button type="submit" name="ubah" class="btn btn-primary" style="float: right;">Ubah</button>
    </form>
</div>

<?php include 'layout/footer.php'; ?>
