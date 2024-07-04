<?php

include 'layout/header.php';

// check apakah tombol tambah ditekan
if (isset($_POST['tambah'])){
    if (create_nilai_alternatif($_POST)> 0){
        echo"<script>
                alert('Data Nilai Alternatif Berhasil Ditambahkan');
                document.location.herf = 'alternatif.php';
            </script";
    } else{
        echo"<script>
                alert('Data Nilai Alternatif Berhasil Ditambahkan');
                document.location.herf = 'alternatif.php';
            </script";
    }
}
?>


   <div class="container mt-5">
   <h1>Tambah Nilai Alternatif</h1>
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
             <label for="dosis" class="form-label">Dosis</label>
             <input type="text" class="form-control" id="dosis" name="dosis"
             placeholder="Dosis....."required>
        </div>

        <div class="mb-3">
             <label for="harga" class="form-label">Harga</label>
             <input type="text" class="form-control" id="harga" name="harga"
             placeholder="Harga....."required>
        </div>

        <div class="mb-3">
             <label for="tingkat_efektivitas" class="form-label">Tingkat Efektivitas</label>
             <input type="text" class="form-control" id="tingkat_efektivitas" name="tingkat_efektivitas"
             placeholder="Tingkat Efektivitas....."required>
        </div>

        <div class="mb-3">
             <label for="efek_samping" class="form-label">Efek Samping</label>
             <input type="text" class="form-control" id="efek_samping" name="efek_samping"
             placeholder="Efek Samping....."required>
        </div>

        <div class="mb-3">
             <label for="durasi_aktif" class="form-label">Durasi Aktif</label>
             <input type="text" class="form-control" id="durasi_aktif" name="durasi_aktif"
             placeholder="Durasi Aktif....."required>
        </div>

        <button type="sumbit" name="tambah" class="btn btn-primary" style="float: right;">Tambah</button>
   </form>

   </div>

   <?php include 'layout/footer.php'; ?>