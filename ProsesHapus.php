<!-- hapusResep.php -->
<?php
include 'config/db.php';
$id = $_POST['id_resep'];
mysqli_query($conn, "DELETE FROM resep WHERE id='$id'");
header("Location: dataAkun.php");
?>
