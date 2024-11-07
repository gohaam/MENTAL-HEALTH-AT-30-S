<?php
session_start();
require_once './inc/inc_connection.php';

// Pastikan pengguna login
if (!isset($_SESSION['user_id'])) {
    echo "Anda harus login untuk mengirim hasil kuis.";
    exit();
}

$user_id = $_SESSION['user_id'];
$answers = $_POST['answers'];
$score = 0;

// Tentukan bobot untuk setiap nilai jawaban
$answer_weights = [
    1 => 0, // Tidak pernah
    2 => 1, // Setidaknya beberapa kali dalam setahun
    3 => 2, // Setidaknya sebulan sekali
    4 => 3, // Beberapa kali dalam sebulan
    5 => 4, // Seminggu sekali
    6 => 5, // Beberapa kali seminggu
    7 => 6  // Setiap hari
];

// Hitung skor
foreach ($answers as $question_id => $answer) {
    // Tambahkan nilai jawaban ke skor total berdasarkan bobot
    $score += $answer_weights[(int)$answer];
}

// Simpan skor ke database
$sql = "INSERT INTO results (user_id, score) VALUES (?, ?)";
$stmt = mysqli_prepare($koneksi, $sql);
mysqli_stmt_bind_param($stmt, "ii", $user_id, $score);
mysqli_stmt_execute($stmt);

// Tampilkan pesan sukses dan redirect
echo "<script>
        alert('Hasil kuis Anda berhasil disimpan. Skor Anda adalah $score.');
        window.location.href = 'resultpage.php';
      </script>";
?>
