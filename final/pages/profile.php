<?php include '../includes/header.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Profile</title>
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<main class="page-transition">
<div class="profile-container">
  <h2>Edit Profile</h2>

  <div class="avatar-preview">
    <img src="../assets/images/avatar.jpg" alt="Profile Picture">
  </div>

  <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
    <script>alert("Profile sudah diperbaharui!");</script>
  <?php endif; ?>

  <form method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label>Username:</label>
      <input type="text" name="username" required>
    </div>

    <div class="form-group">
      <label>Game Utama:</label>
      <select name="game" required>
      <option value="MLBB">Mobile Legends</option>
            <option value="PUBG">PUBG Mobile</option>
            <option value="Valorant">Valorant</option>
            <option value="Dota">DOTA</option>
            <option value="Roblox">Roblox</option>
      </select>
    </div>

    <div class="form-group">
      <label>Role:</label>
      <input type="text" name="role" required>
    </div>

    <div class="form-group">
      <label>Deskripsi:</label>
      <textarea name="desc"></textarea>
    </div>

    <div class="form-group">
      <label>Foto Profil:</label>
      <input type="file" name="avatar" accept="image/*">
    </div>

    <button type="submit" class="save-btn">Simpan Perubahan</button>
  </form>
</div>

<?php include '../includes/footer.php'; ?>
</body>
</html>
