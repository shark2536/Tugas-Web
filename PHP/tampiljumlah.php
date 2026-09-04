<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "siswa_db";
$koneksi = mysqli_connect($host, $username, $password, $db);

$query = "SELECT * FROM data_kelas";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
</head>
<body>
    <table border ="1">
        <thead>
            <th>ID</th>
            <th>Nama Kelas</th>
            <th>Jumlah Siswa</th>
        </thead>
        <tbody>
            <?php
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id']. "</td>";
                    echo "<td>" . $row['nama_kelas']. "</td>";
                    echo "<td>" . $row['jumlah_siswa']. "</td>";
                }
            ?>
        </tbody>
    </table>
    <a href="connection.php">Koneksi PHP</a>
</body>
</html>