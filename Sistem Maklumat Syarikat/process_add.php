<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ic = $_POST['ic'];
    $name = $_POST['name'];
    $nokp = $_POST['nokp'];
    $hp = $_POST['hp'];
    $gender = $_POST['gender'];

    // Simpan data ke dalam pangkalan data
    $sql = "INSERT INTO pekerja (ic, nama, no_kp, hp, jantina) VALUES ('$ic', '$name', '$nokp', '$hp', '$gender')";

    if ($conn->query($sql) === TRUE) {
        header('Location: employee_list.php');  // Alihkan ke senarai pekerja
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
