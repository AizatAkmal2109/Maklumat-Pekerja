<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_id'])) {
    $update_id = $_POST['update_id'];
    $name = $_POST['name'];
    $nokp = $_POST['nokp'];
    $hp = $_POST['hp'];
    $gender = $_POST['gender'];

    // Update rekod dalam pangkalan data
    $sql_update = "UPDATE pekerja SET nama='$name', no_kp='$nokp', hp='$hp', jantina='$gender' WHERE id=$update_id";

    if ($conn->query($sql_update) === TRUE) {
        header('Location: employee_list.php');  // Alihkan semula ke halaman senarai pekerja
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
} else {
    header('Location: employee_list.php');  // Jika akses tidak sah, alihkan semula ke halaman senarai pekerja
    exit();
}

$conn->close();
?>
