<?php
session_start();
require_once './inc/inc_connection.php';

if (!isset($_SESSION['user_id'])) {
    echo "Anda harus login untuk melihat hasil kuis.";
    exit();
}

$user_id = $_SESSION['user_id'];

// Ambil hasil kuis terbaru untuk pengguna yang login
$sql = "SELECT * FROM results WHERE user_id = ? ORDER BY created_at DESC LIMIT 1";
$stmt = mysqli_prepare($koneksi, $sql);
mysqli_stmt_bind_param($stmt, "i", $user_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$quiz_result = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Kuis</title>
</head>
<body>
    <h1>Hasil Test Psikologi Burn-out</h1>
    <?php if ($quiz_result): ?>
        <p>Skor Anda: <?php echo $quiz_result['score']; ?></p>
        <p>Tanggal Tes: <?php echo $quiz_result['created_at']; ?></p>
    <?php else: ?>
        <p>Anda belum mengikuti tes.</p>
    <?php endif; ?>
</body>
</html>
