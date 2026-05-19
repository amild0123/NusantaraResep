<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login - Resep Nusantara</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body class="login-page">
  <section class="login-container">
    <h2>Login ke Akun Anda</h2>
    <form action="prosesLogin.php" method="POST">
      <!-- Email -->
      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Masukkan email" required>

      <!-- Password -->
      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Masukkan kata sandi" required>

      <!-- Tombol -->
      <button type="submit" class="btn-green">Masuk</button>
    </form>

    <!-- Link daftar -->
    <p class="register-text">
      Belum punya akun? <a href="register.php">Daftar di sini</a>
    </p>
  </section>
</body>
</html>

