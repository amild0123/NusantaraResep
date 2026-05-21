<?php

include 'koneksi.php';

/* TEXT */

$user_id = $_SESSION['user_id'];
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$langkah1 = $_POST['langkah1'];
$langkah2 = $_POST['langkah2'];
$langkah3 = $_POST['langkah3'];
$langkah4 = $_POST['langkah4'];

$kategori = $_POST['kategori'];


/* ========================= */
/* SAMPUL */
/* ========================= */

$sampul = $_FILES['sampul']['name'];
$tmpSampul = $_FILES['sampul']['tmp_name'];

move_uploaded_file(
    $tmpSampul,
    "upload/" . $sampul
);


/* ========================= */
/* GAMBAR 1 */
/* ========================= */

$gambar1 = $_FILES['gambar1']['name'];
$tmp1 = $_FILES['gambar1']['tmp_name'];

move_uploaded_file(
    $tmp1,
    "upload/" . $gambar1
);


/* ========================= */
/* GAMBAR 2 */
/* ========================= */

$gambar2 = $_FILES['gambar2']['name'];
$tmp2 = $_FILES['gambar2']['tmp_name'];

move_uploaded_file(
    $tmp2,
    "upload/" . $gambar2
);


/* ========================= */
/* GAMBAR 3 */
/* ========================= */

$gambar3 = $_FILES['gambar3']['name'];
$tmp3 = $_FILES['gambar3']['tmp_name'];

move_uploaded_file(
    $tmp3,
    "upload/" . $gambar3
);


/* ========================= */
/* GAMBAR 4 */
/* ========================= */

$gambar4 = $_FILES['gambar4']['name'];
$tmp4 = $_FILES['gambar4']['tmp_name'];

move_uploaded_file(
    $tmp4,
    "upload/" . $gambar4
);


/* ========================= */
/* QUERY */
/* ========================= */

$query = mysqli_query($conn,

"INSERT INTO resep VALUES(

    NULL,
    '$user_id',
    '$judul',
    '$sampul',
    '$deskripsi',
    '$kategori',
    
    '$langkah1',
    '$langkah2',
    '$langkah3',
    '$langkah4',

    '$gambar1',
    '$gambar2',
    '$gambar3',
    '$gambar4'

)"

);


/* ========================= 
        CEK 
   ========================= */
if($query){
    echo "
    <script>
    alert('Resep berhasil ditambahkan');
    window.location='index.php?page=Home';
    </script>
    ";
}else{
    echo "
    <script>
    alert('Gagal tambah resep');
    </script>
    ";
}

?>