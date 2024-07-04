<?php

include 'layout/header.php';
// check apakah tombol tambah ditekan
if (isset($_POST['tambah'])){
    if (create_table_kriteria($_POST)> 0){
        echo"<script>
                alert('Data Table Kriteria Berhasil Ditambahkan');
                document.location.herf = 'index.php';
            </script";
    } else{
        echo"<script>
                alert('Data Table Kriteria Berhasil Ditambahkan');
                document.location.herf = 'index.php';
            </script";
    }
}
?>


   <div class="container mt-5">
   <h1>Tambah Kriteria</h1>
   <hr>

   <form action=""method="post">
        <div class="mb-3">
             <label for="kode" class="form-label">Kode</label>
             <input type="text" class="form-control" id="kode" name="kode"
             placeholder="Kode....."required>
        </div>

        <div class="mb-3">
             <label for="kriteria" class="form-label">Kriteria</label>
             <input type="text" class="form-control" id="kriteria" name="kriteria"
             placeholder="Kriteria....." required>
        </div>

        <div class="mb-3">
             <label for="tipe" class="form-label">Tipe</label>
             <input type="text" class="form-control" id="tipe" name="tipe"
             placeholder="Tipe....."required>
        </div>

        <div class="mb-3">
             <label for="bobot" class="form-label">Bobot</label>
             <input type="text" class="form-control" id="bobot" name="bobot"
             placeholder="Bobot....."required>
        </div>

        <button type="sumbit" name="tambah" class="btn btn-primary" style="float: right;">Tambah</button>
   </form>

   </div>

   <?php include 'layout/footer.php'; ?>