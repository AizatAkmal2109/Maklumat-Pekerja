<?php
$servername = "localhost";
$username = "root";
$password = "";  // Kata laluan MySQL anda
$dbname = "pekerja_db_baru";  // Nama pangkalan data yang betul

// Cipta sambungan
$conn = new mysqli($servername, $username, $password, $dbname);

// Semak sambungan
if ($conn->connect_error) {
    die("Sambungan gagal: " . $conn->connect_error);
}
?>
