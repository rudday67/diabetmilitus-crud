<?php

include 'layout/header.php';

// Mengambil id_perangkingan dari URL
$id_perangkingan= (int) $_GET['id_perangkingan'];

// Ambil data perangkingan berdasarkan id_perangkingan
$tbl_perangkingan = select("SELECT * FROM tbl_perangkingan WHERE id_perangkingan = $id_perangkingan");
if (!$tbl_perangkingan) {
    echo "<script>
            alert('Data Perangkingan Tidak Ditemukan');
            document.location.href = 'perangkingan.php';
          </script>";
    exit;
}
$tbl_perangkingan = $tbl_perangkingan[0];

// Cek apakah tombol ubah ditekan
if (isset($_POST['ubah'])){
    if (update_tbl_perangkingan($_POST) > 0){
        echo "<script>
                alert('Data Nilai perangkingan Berhasil Diubah');
                document.location.href = 'perangkingan.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Nilai Perangkingan Gagal Diubah');
                document.location.href = 'perangkingan.php';
              </script>";
    }
}
?>

<div class="container mt-5">
    <h1>Ubah Nilai Perangkingan</h1>
    <hr>

    <form action="" method="post">
        <input type="hidden" name="id_perangkingan" value="<?=$tbl_perangkingan['id_perangkingan'];?>">
        <div class="mb-3">
            <label for="nama_obat" class="form-label">Nama Obat</label>
            <input type="text" class="form-control" id="nama_obat" name="nama_obat" value="<?=$tbl_perangkingan['nama_obat'];?>" placeholder="Nama Obat....." required>
        </div>

        <div class="mb-3">
            <label for="alternatif" class="form-label">Alternatif</label>
            <input type="text" class="form-control" id="alternatif" name="alternatif" value="<?=$tbl_perangkingan['alternatif'];?>" placeholder="Alternatif....." required>
        </div>

        <div class="mb-3">
            <label for="skor_total" class="form-label">Skor Total (Yi)</label>
            <input type="text" class="form-control" id="skor_total" name="skor_totall" value="<?=$tbl_perangkingan['skor_total'];?>" placeholder="Skor Total....." required>
        </div>

        <div class="mb-3">
            <label for="rangking" class="form-label">Rangking</label>
            <input type="text" class="form-control" id="rangking" name="rangking" value="<?=$tbl_perangkingan['rangking'];?>" placeholder="Rangking....." required>
        </div>


        <button type="submit" name="ubah" class="btn btn-primary" style="float: right;">Ubah</button>
    </form>
</div>

<?php include 'layout/footer.php'; ?>
