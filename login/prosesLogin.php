<?php
session_start();
include '../koneksi.php'; // koneksi ke database

$email    = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
$user  = mysqli_fetch_assoc($query);

if($user && password_verify($password, $user['password'])){
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['nama']    = $user['nama'];
    header("Location: ../index.php");
    exit;
} else {
    echo "Login gagal. <a href='../login.php'>Coba lagi</a>";
}
?>
