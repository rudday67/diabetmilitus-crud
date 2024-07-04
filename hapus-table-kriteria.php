<?php
include 'config/app.php';

// Menerima id_obat yang dipilih pasien
$id_obat = (int)$_GET['id_obat'];

if(delete_table_kriteria($id_obat) > 0) {
    echo    "<script>
                alert('Data Kriteria Berhasil Dihapus');
                document.location.href = 'index.php';
            </script>";
} else {
    echo    "<script>
                alert('Data Kriteria Gagal Dihapus');
                document.location.href = 'index.php';
            </script>";
}
