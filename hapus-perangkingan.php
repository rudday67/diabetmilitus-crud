<?php
include 'config/app.php';

// Menerima id_perangkingan yang dipilih pasien
$id_perangkingan = (int)$_GET['id_perangkingan'];

if(delete_tbl_perangkingan($id_perangkingan) > 0) {
    echo    "<script>
                alert('Data Nilai Perangkingan Berhasil Dihapus');
                document.location.href = 'perangkingan.php';
            </script>";
} else {
    echo    "<script>
                alert('Data Nilai Perangkingan Gagal Dihapus');
                document.location.href = 'perangkingan.php';
            </script>";
}
