<?php
session_start();

// Cek apakah pengguna sudah login atau belum
if(!isset($_SESSION['username'])) {
    header("Location: login_lanjut.php");
    exit();
}

// Ambil data pengguna dari session
$username = $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome, <?php echo $username; ?>! 🎉</h1>
    <p>Ini adalah halaman dashboard. Selamat datang di website kami! 🚀</p>

    <a href="logout.php">Logout</a> <!-- Halaman logout.php untuk proses logout -->
</body>
</html>
