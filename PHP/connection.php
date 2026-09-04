<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "siswa_db";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$koneksi = mysqli_connect($host, $username, $password, $db);

if ($koneksi) {
    echo "<h1 style='color:green'>Sukses!!!</h1>";
    echo "Berhasil Terhubung ke Database: " . $db;
} else {
    echo "<h1 style='color:red'>Gagal!</h1>";
    echo "Gagal Terhubung ke Database";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="tampiljumlah.php">Tampil Jumlah Siswa</a>
</body>
</html>