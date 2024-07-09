<!DOCTYPE html>
<html>
<head>
    <title>Kemaskini Pekerja</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('gradient-dynamic-blue-lines-background_23-2148995756.avif');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
            margin: 20px auto;
        }
        h1 {
            text-align: center;
            color: #333333;
            margin-top: 0;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input, select {
            width: calc(100% - 24px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button.cancel {
            background-color: #ccc;
            color: #333;
            margin-right: 10px;
        }
        button.cancel:hover {
            background-color: #bbb;
        }
        button.Update {
            background-color: #4CAF50;
            color: white;
        }
        button.Update:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        require 'db.php';

        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
            $id = $_GET['id'];

            // Dapatkan maklumat pekerja berdasarkan ID
            $sql_select = "SELECT id, nama, no_kp, hp, jantina FROM pekerja WHERE id=$id";
            $result = $conn->query($sql_select);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $name = htmlspecialchars($row['nama']);
                $nokp = htmlspecialchars($row['no_kp']);
                $hp = htmlspecialchars($row['hp']);
                $gender = htmlspecialchars($row['jantina']);

                echo "<h1>UPDATE MAKLUMAT $name</h1>";
                echo "<form method='POST' action='process_update.php'>";
                echo "<input type='hidden' name='update_id' value='$id'>";
                echo "<label for='nokp'>IC:</label>";
                echo "<input type='text' id='nokp' name='nokp' value='$nokp' required><br>";
                echo "<label for='name'>NAMA:</label>";
                echo "<input type='text' id='name' name='name' value='$name' required><br>";
                echo "<label for='hp'>HP:</label>";
                echo "<input type='text' id='hp' name='hp' value='$hp' required><br>";
                echo "<label for='gender'>JANTINA:</label>";
                echo "<select id='gender' name='gender' required>";
                echo "<option value='Lelaki' ".($gender=='Lelaki' ? 'selected' : '').">Lelaki</option>";
                echo "<option value='Perempuan' ".($gender=='Perempuan' ? 'selected' : '').">Perempuan</option>";
                echo "</select><br>";
                echo "<button type='button' class='cancel' onclick='window.location.href=\"employee_list.php\"'>Cancel</button>";
                echo "<button type='submit' class='Update'>Update</button>";
                echo "</form>";
            } else {
                echo "<p>Maklumat pekerja tidak dijumpai.</p>";
            }
        } else {
            echo "<p>Parameter ID tidak sah.</p>";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
