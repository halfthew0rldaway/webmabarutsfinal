<?php
$allPlayers = [
    'Boruto uzumaki',
    'cutiepatotie',
    'oloefmaster',
    'SkinnyWeeny',
    'urmom',
    'miaw',
    'GeTDownMrPResident',
    'SilentKill',
    'fukumean?',
    'AcePilot',
    'ShadowFury',
    'LookATmeDawg',
    'StealthFox',
    'WindCaster',
    'TacticalOne',
    'SniperWolf',
    'ALmighty',
    'FireStrike',
    'OracleMage',
    'TolonginDit'
];
$selectedPlayer = $_SERVER['REQUEST_METHOD'] === 'POST'
    ? htmlspecialchars($_POST['player'])
    : htmlspecialchars($_GET['player'] ?? '');
include '../includes/header.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = htmlspecialchars($_POST['nama']);
    $game = htmlspecialchars($_POST['game']);
    $waktu = $_POST['waktu'];
    $catatan = htmlspecialchars($_POST['catatan']);
    $timestamp = strtotime($waktu);
    $jamMulai = date('H:i', $timestamp);
    $jamSelesai = date('H:i', strtotime('+2 hours', $timestamp));

 
    $hariEng = date('l', $timestamp);
    $hariID = [
        'Monday' => 'Senin', 'Tuesday' => 'Selasa', 'Wednesday' => 'Rabu',
        'Thursday' => 'Kamis', 'Friday' => 'Jumat', 'Saturday' => 'Sabtu', 'Sunday' => 'Minggu'
    ];
    $hari = $hariID[$hariEng] ?? $hariEng;


    $line = "$hari|$jamMulai - $jamSelesai|$game|$selectedPlayer|$nama|$catatan\n";
    file_put_contents('../data/jadwal.txt', $line, FILE_APPEND);
    echo "<script>alert('Ajakan ke $player berhasil dikirim!'); window.location.href = '../pages/jadwal.php';</script>";
    exit;
}
?>


<link rel="stylesheet" href="../assets/css/style.css">
<main class="page-transition">
    <form class="mabar-form" method="POST">
        <h2>Ajakan Main Bareng</h2>
        
        <label>Nama Pemain yang Diajak:</label>
<select name="player" required>
    <option value="">-- Pilih Pemain --</option>
    <?php foreach ($allPlayers as $p): ?>
        <option value="<?= $p ?>" <?= $p === $selectedPlayer ? 'selected' : '' ?>>
            <?= $p ?>
        </option>
    <?php endforeach; ?>
</select>

        <label>Nama Kamu:</label>
        <input type="text" name="nama" required>
        
        <label>Game:</label>
        <select name="game" required>
            <option value="MLBB">Mobile Legends</option>
            <option value="PUBG">PUBG Mobile</option>
            <option value="Valorant">Valorant</option>
            <option value="Dota">DOTA</option>
            <option value="Roblox">Roblox</option>
        </select>
        
        <label>Tanggal & Waktu:</label>
        <input type="datetime-local" name="waktu" required>
        
        <label>Catatan:</label>
        <textarea name="catatan"></textarea>
        
        <button type="submit">Kirim Ajakan</button>
    </form>
</main>

<?php include '../includes/footer.php'; ?>
