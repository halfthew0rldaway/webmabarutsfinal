<?php include '../includes/header.php'; ?>
<link rel="stylesheet" href="../assets/css/style.css">

<main class="page-transition">
    <h2 style="text-align: center; margin-top: 2rem;">Jadwal Mabar</h2>
    <table class="schedule-table">
        <tr>
            <th>Hari</th>
            <th>Waktu</th>
            <th>Game</th>
            <th>Pemain yang Diajak</th>
            <th>Diajak Oleh</th>
            <th>Catatan</th>
        </tr>

        <?php
        $lines = file('../data/jadwal.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $hasData = false;

        foreach ($lines as $line) {
            $data = explode('|', $line);

            if (count($data) >= 6) {
                [$hari, $waktu, $game, $pemain, $oleh, $catatan] = $data;
                echo "<tr>
                        <td>$hari</td>
                        <td>$waktu</td>
                        <td>$game</td>
                        <td>$pemain</td>
                        <td>$oleh</td>
                        <td>$catatan</td>
                      </tr>";
                $hasData = true;
            }
        }

        if (!$hasData) {
            echo "<tr><td colspan='6'>Belum ada jadwal yang tersedia.</td></tr>";
        }
        ?>
    </table>
</main>

<?php include '../includes/footer.php'; ?>
