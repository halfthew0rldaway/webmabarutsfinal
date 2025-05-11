<?php
$players = [
    ['username' => 'Boruto uzumaki', 'game' => 'Valorant', 'role' => 'Otsusuki', 'avatar' => 'p1.jpg'],
    ['username' => 'cutiepatotie', 'game' => 'MLBB', 'role' => 'Mage', 'avatar' => 'p2.jpg'],
    ['username' => 'oloefmaster', 'game' => 'PUBG', 'role' => 'Sniper', 'avatar' => 'p3.jpg'],
    ['username' => 'SkinnyWeeny', 'game' => 'Genshin Impact', 'role' => 'Healer', 'avatar' => 'p4.jpg'],
    ['username' => 'urmom', 'game' => 'Apex Legends', 'role' => 'Assassin', 'avatar' => 'p5.jpg'],
    ['username' => 'miaw', 'game' => 'CS:GO', 'role' => 'AWPer', 'avatar' => 'p6.jpg'],
    ['username' => 'GeTDownMrPResident', 'game' => 'Fortnite', 'role' => 'Builder', 'avatar' => 'p7.jpg'],
    ['username' => 'SilentKill', 'game' => 'Free Fire', 'role' => 'Flanker', 'avatar' => 'p8.jpg'],
    ['username' => 'fukumean?', 'game' => 'DOTA 2', 'role' => 'Support', 'avatar' => 'p9.jpg'],
    ['username' => 'AcePilot', 'game' => 'Overwatch', 'role' => 'Tank', 'avatar' => 'p10.jpg'],
    ['username' => 'ShadowFury', 'game' => 'Valorant', 'role' => 'Controller', 'avatar' => 'p11.jpg'],
    ['username' => 'LookATmeDawg', 'game' => 'MLBB', 'role' => 'Fighter', 'avatar' => 'p12.jpg'],
    ['username' => 'StealthFox', 'game' => 'PUBG', 'role' => 'Scout', 'avatar' => 'p13.jpg'],
    ['username' => 'WindCaster', 'game' => 'Genshin Impact', 'role' => 'Anemo DPS', 'avatar' => 'p14.jpg'],
    ['username' => 'TacticalOne', 'game' => 'Apex Legends', 'role' => 'Tactician', 'avatar' => 'p15.jpg'],
    ['username' => 'SniperWolf', 'game' => 'CS:GO', 'role' => 'Sniper', 'avatar' => 'p16.jpg'],
    ['username' => 'ALmighty', 'game' => 'Fortnite', 'role' => 'Engineer', 'avatar' => 'p17.jpg'],
    ['username' => 'FireStrike', 'game' => 'Free Fire', 'role' => 'Grenadier', 'avatar' => 'p18.jpg'],
    ['username' => 'OracleMage', 'game' => 'DOTA 2', 'role' => 'Int Support', 'avatar' => 'p19.jpg'],
    ['username' => 'TolonginDit', 'game' => 'Overwatch', 'role' => 'Main Tank', 'avatar' => 'p20.jpg']
];

include '../includes/header.php';
?>

<main class="page-transition">
    <h2 style="text-align: center; margin-top: 2rem;">Daftar Pemain</h2>
    <link rel="stylesheet" href="/assets/css/style.css">
    <div class="player-grid">
        <?php foreach($players as $player): ?>
        <div class="player-card">
        <img src="../assets/images/<?= $player['avatar'] ?>?v=<?= time() ?>" alt="Avatar">
            <h3><?= htmlspecialchars($player['username']) ?></h3>
            <p><strong>Game:</strong> <?= htmlspecialchars($player['game']) ?></p>
            <p><strong>Role:</strong> <?= htmlspecialchars($player['role']) ?></p>
            <a href="mabar_form.php?player=<?= urlencode($player['username']) ?>" class="mabar-btn">Ajak Mabar</a>
        </div>
        <?php endforeach; ?>
    </div>
</main>

<?php include '../includes/footer.php'; ?>
