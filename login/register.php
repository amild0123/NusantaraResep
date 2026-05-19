<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Register - Resep Nusantara</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body class="login-page">
  <section class="login-container">
    <h2>Daftar Akun Baru</h2>
    <form action="prosesRegis.php" method="POST">
      <!-- Nama -->
      <label for="nama">Nama Lengkap</label>
      <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>

      <!-- Email -->
      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Masukkan email" required>

      <!-- Password -->
      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Masukkan kata sandi" required>

      <!-- Tombol -->
      <button type="submit" class="btn-green">Daftar</button>
    </form>

    <!-- Link login -->
    <p class="register-text">
      Sudah punya akun? <a href="login.php">Login di sini</a>
    </p>
  </section>
</body>
</html>
