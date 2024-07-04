<?php

include 'layout/header.php';

// check apakah tombol tambah ditekan
if (isset($_POST['tambah'])){
    if (create_tbl_perangkingan($_POST)> 0){
        echo"<script>
                alert('Data Nilai Perangkingan Berhasil Ditambahkan');
                document.location.herf = 'perangkingan.php';
            </script";
    } else{
        echo"<script>
                alert('Data Nilai Perangkingan Berhasil Ditambahkan');
                document.location.herf = 'perangkingan.php';
            </script";
    }
}
?>


   <div class="container mt-5">
   <h1>Tambah Nilai Perangkingan</h1>
   <hr>

   <form action=""method="post">
        <div class="mb-3">
             <label for="nama_obat" class="form-label">Nama Obat</label>
             <input type="text" class="form-control" id="nama_obat" name="nama_obat"
             placeholder="Nama Obat....."required>
        </div>

        <div class="mb-3">
             <label for="alternatif" class="form-label">Alternatif</label>
             <input type="text" class="form-control" id="alternatif" name="alternatif"
             placeholder="Alternatif....." required>
        </div>

        <div class="mb-3">
             <label for="skor_total" class="form-label">Skor Total (Yi)</label>
             <input type="text" class="form-control" id="skor_total" name="skor_total"
             placeholder="Total Nilai (Yi)....."required>
        </div>

        <div class="mb-3">
             <label for="rangking" class="form-label">Rangking</label>
             <input type="text" class="form-control" id="rangking" name="rangking"
             placeholder="Rangking....."required>
        </div>


        <button type="sumbit" name="tambah" class="btn btn-primary" style="float: right;">Tambah</button>
   </form>

   </div>

   <?php include 'layout/footer.php'; ?>