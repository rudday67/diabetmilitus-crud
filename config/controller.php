<?php 
// Fungsi menampilkan data
function select($query)
{
    // Panggil koneksi database
    global $db;

    $result = mysqli_query($db, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// Fungsi menambahkan data kriteria
function create_table_kriteria($post)
{
    global $db;

    $kode       = $post['kode'];
    $kriteria   = $post['kriteria'];
    $tipe       = $post['tipe'];
    $bobot      = $post['bobot'];

    // Query tambah data
    $query = "INSERT INTO table_kriteria VALUES(null, '$kode', '$kriteria', '$tipe', '$bobot')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// Fungsi ubah data kriteria
function update_table_kriteria($post)
{
    global $db;

    $id_obat     = $post['id_obat'];
    $kode        = $post['kode'];
    $kriteria    = $post['kriteria'];
    $tipe        = $post['tipe'];
    $bobot       = $post['bobot'];

    // Query ubah data
    $query = "UPDATE table_kriteria SET kode = '$kode', kriteria = '$kriteria', tipe = '$tipe', bobot = '$bobot' WHERE id_obat = $id_obat";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// Fungsi hapus data kriteria
function delete_table_kriteria($id_obat)
{
    global $db;

    // Query hapus data kriteria
    $query = "DELETE FROM table_kriteria WHERE id_obat = $id_obat";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

//fungsi tambah data sub kriteria 
function create_sub_kriteria($post)
{
    global $db;

    $alternatif      = $post['alternatif'];
    $nilai_c1        = $post['nilai_c1'];
    

    // Query tambah data
    $query = "INSERT INTO sub_kriteria VALUES(null, '$alternatif', '$nilai_c1')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// Fungsi hapus data sub kriteria
function delete_sub_kriteria($id_kriteria)
{
    global $db;

    // Query hapus data kriteria
    $query = "DELETE FROM sub_kriteria WHERE id_kriteria = $id_kriteria";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// Fungsi ubah data sub kriteria
function update_sub_kriteria($post)
{
    global $db;

    $id_kriteria     = $post['id_kriteria'];
    $alternatif        = $post['alternatif'];
    $nilai_c1   = $post['nilai_c1'];

    // Query ubah data
    $query = "UPDATE sub_kriteria SET alternatif = '$alternatif', nilai_c1 = '$nilai_c1' WHERE id_kriteria = $id_kriteria";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// Fungsi menambahkan data nilai alternatif
function create_nilai_alternatif($post)
{
    global $db;

    $nama_obat       = $post['nama_obat'];
    $alternatif   = $post['alternatif'];
    $dosis       = $post['dosis'];
    $harga      = $post['harga'];
    $tingkat_efektivitas   = $post['tingkat_efektivitas'];
    $efek_samping       = $post['efek_samping'];
    $durasi_aktif      = $post['durasi_aktif'];

    // Query tambah data
    $query = "INSERT INTO nilai_alternatif VALUES(null, '$nama_obat', '$alternatif', '$dosis', '$harga','$tingkat_efektivitas','$efek_samping','$durasi_aktif')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// Fungsi ubah data nilai alternatif
function update_nilai_alternatif ($post)
{
    global $db;

    $id_alternatif               = $post['id_alternatif'];
    $nama_obat                   = $post['nama_obat'];
    $alternatif                  = $post['alternatif'];
    $dosis                       = $post['dosis'];
    $harga                       = $post['harga'];
    $tingkat_efektivitas         = $post['tingkat_efektivitas'];
    $efek_samping                = $post['efek_samping'];
    $durasi_aktif                = $post['durasi_aktif'];

   // Query ubah data
   $query = "UPDATE nilai_alternatif SET nama_obat = '$nama_obat', alternatif = '$alternatif', dosis = '$dosis', tingkat_efektivitas = '$tingkat_efektivitas', efek_samping = '$efek_samping', durasi_aktif = '$durasi_aktif'  WHERE id_alternatif = $id_alternatif";

   mysqli_query($db, $query);

   return mysqli_affected_rows($db);
}

// Fungsi hapus data alternatif
function delete_nilai_alternatif($id_alternatif)
{
    global $db;

    // Query hapus data alternatif
    $query = "DELETE FROM nilai_alternatif WHERE id_alternatif = $id_alternatif";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// Fungsi menambahkan data nilai perangkingan
function create_tbl_perangkingan($post)
{
    global $db;

    $nama_obat       = $post['nama_obat'];
    $alternatif   = $post['alternatif'];
    $skor_total       = $post['skor_total'];
    $rangking      = $post['rangking'];

    // Query tambah data
    $query = "INSERT INTO tbl_perangkingan VALUES(null, '$nama_obat', '$alternatif', '$skor_total', '$rangking')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// Fungsi ubah data nilai perangkingan
function update_tbl_perangkingan ($post)
{
    global $db;

    $id_perangkingan               = $post['id_perangkingan'];
    $nama_obat                   = $post['nama_obat'];
    $alternatif                  = $post['alternatif'];
    $skor_total                       = $post['skor_total'];
    $rangking                       = $post['rangking'];

   // Query ubah data
   $query = "UPDATE tbl_perangkingan SET nama_obat = '$nama_obat', alternatif = '$alternatif', skor_total = '$skor_total', rangking = '$rangking'  WHERE id_perangkingan = $id_perangkingan";

   mysqli_query($db, $query);

   return mysqli_affected_rows($db);
}

// Fungsi hapus data perangkingan
function delete_tbl_perangkingan($id_perangkingan)
{
    global $db;

    // Query hapus data perangkingan
    $query = "DELETE FROM tbl_perangkingan WHERE id_perangkingan = $id_perangkingan";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}