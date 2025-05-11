<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Komunitas Mabar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
<main class="page-transition">
    <section class="banner">
        <video autoplay muted loop playsinline class="banner-video">
            <source src="assets/videos/banner.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div class="banner-overlay"></div>

        <div class="banner-content">
            <h2>Selamat Datang di MABSKUY!</h2>
            <p class="sarkas">"loh katanya jago? kok nyari temen mabar?"</p>
            <a href="pages/player.php" class="btn-cek-pemain">Cek ada siapa aja...</a>
        </div>
    </section>
</main>
<?php include 'includes/footer.php'; ?>
</body>
</html>
