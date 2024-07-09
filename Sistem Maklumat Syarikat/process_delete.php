<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete rekod dari pangkalan data
    $sql_delete = "DELETE FROM pekerja WHERE id=$id";

    if ($conn->query($sql_delete) === TRUE) {
        header('Location: employee_list.php');  // Alihkan semula ke halaman senarai pekerja
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    header('Location: employee_list.php');  // Jika akses tidak sah, alihkan semula ke halaman senarai pekerja
    exit();
}

$conn->close();
?>
