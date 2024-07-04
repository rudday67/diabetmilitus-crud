<?php
include 'config/app.php';

// Menerima id_kriteria yang dipilih pasien
$id_alternatif = (int)$_GET['id_alternatif'];

if(delete_nilai_alternatif($id_alternatif) > 0) {
    echo    "<script>
                alert('Data Nilai Alternatif Berhasil Dihapus');
                document.location.href = 'alternatif.php';
            </script>";
} else {
    echo    "<script>
                alert('Data Nilai Alternatif Gagal Dihapus');
                document.location.href = 'alternatif.php';
            </script>";
}
