<?php
include 'config/app.php';

// Menerima id_kriteria yang dipilih pasien
$id_kriteria = (int)$_GET['id_kriteria'];

if(delete_sub_kriteria($id_kriteria) > 0) {
    echo    "<script>
                alert('Data Sub Kriteria Berhasil Dihapus');
                document.location.href = 'kriteria.php';
            </script>";
} else {
    echo    "<script>
                alert('Data Sub Kriteria Gagal Dihapus');
                document.location.href = 'kritera.php';
            </script>";
}
