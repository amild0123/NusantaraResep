<?php
include '../koneksi.php';

$nama     = $_POST['nama'];
$email    = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (nama, email, password) VALUES ('$nama', '$email', '$password')";

if(mysqli_query($conn, $sql)){
    echo "Registrasi berhasil! <a href='login.php'>Login sekarang</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
