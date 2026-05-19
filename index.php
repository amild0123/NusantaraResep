<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: ./login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Resep Nusantara</title>
  <link rel="stylesheet" href="style.css">
  <script src="nav.js" defer></script>
  <script src="sampul.js" defer></script>
</head>
<body>
  <?php include 'component/nav.php'; ?>
  <?php include 'route/web.php'; ?>
</body>
</html>
