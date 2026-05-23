<!-- dataAkun.php -->
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include 'koneksi.php'; // koneksi ke database
$user_id = $_SESSION['user_id'];
$query_users = mysqli_query($conn, "SELECT * FROM users WHERE id='$user_id'");
$user = mysqli_fetch_assoc($query_users);

$query_resep = mysqli_query($conn, "SELECT * FROM resep WHERE user_id='$user_id'");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Akun - Resep Nusantara</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <section class="akun-container">
    <div class="profile">
      <img src="img/default-profile.png" alt="Foto Profil">
      <h2><?php echo $user['nama']; ?></h2>
      <p><?php echo $user['email']; ?></p>
    </div>

    <h3>Buku Resep Saya</h3>
    <div class="resep-grid">
      <?php if(mysqli_num_rows($query_resep) > 0): ?>
        <?php while($r = mysqli_fetch_assoc($query_resep)): ?>
          <div class="resep-card">
            <img src="uploads/<?php echo $r['gambar']; ?>" alt="<?php echo $r['judul']; ?>">
            <h4><?php echo $r['judul']; ?></h4>
            <p><?php echo $r['kategori']; ?></p>
            <form action="hapusResep.php" method="POST">
              <input type="hidden" name="id_resep" value="<?php echo $r['id']; ?>">
              <button type="submit" class="delete-btn">🗑️</button>
            </form>
          </div>
        <?php endwhile; ?>
      <?php else: ?>
        <p class="kosong">Belum ada resep yang kamu buat.</p>
      <?php endif; ?>
    </div>
  </section>
</body>
</html>
