<!DOCTYPE html>
<html>
<head>
    <title>Senarai Pekerja</title>
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
        .header-container {
            background-color: #f2f2f2; /* Warna kelabu */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 1200px;
            margin: 20px auto;
            
        }
        .header-container .company-name {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .header-container .button-container {
            margin-top: 20px;
            
        }
        .add-button {
            background-color: #008CBA;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 20px;
            cursor: pointer;
            border-radius: 4px;
            font-size: 16px;
        }
        .add-button:hover {
            background-color: #005A6E;
        }
        .back-button {
            background-color: #333333;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 20px;
            cursor: pointer;
            border-radius: 4px;
            font-size: 16px;
        }
        .back-button:hover {
            background-color: #555555;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.9);  /* Transparan putih */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 1200px;
            margin: 0 auto;
            margin-top: 20px;
        }
        h1 {
            text-align: center;
            color: #ffffff
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        .update-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 8px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin-right: 5px;
            cursor: pointer;
        }
        .update-button:hover {
            background-color: #45a049;
        }
        .delete-button {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 8px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin-right: 5px;
            cursor: pointer;
        }
        .delete-button:hover {
            background-color: #da190b;
        }
        /* Modal Style */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 400px;
            text-align: center;
            border-radius: 8px;
        }
        .modal-buttons {
            margin-top: 20px;
            text-align: center;
        }
        .btn {
            padding: 10px 20px;
            margin: 0 10px;
            cursor: pointer;
            border-radius: 4px;
            border: none;
            outline: none;
            font-size: 14px;
        }
        .btn-yes {
            background-color: #f44336; /* Red */
            color: white;
        }
        .btn-yes:hover {
            background-color: #da190b;
        }
        .btn-cancel {
            background-color: #ffffff; /* White */
            color: #333333;
            border: 1px solid #cccccc;
        }
        .btn-cancel:hover {
            background-color: #f5f5f5;
        }
        .delete-modal-header {
            font-size: 24px;
            color: #f44336; /* Red */
            margin-bottom: 10px;
        }
        .delete-modal-text {
            font-size: 16px;
            color: #333333;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="header-container">
        <div class="company-name">ANISHOLDINGS SDN.BHD.</div>
        <div class="button-container">
            <a href="add_employee.php" class="add-button">ADD</a>
            <a href="index.php" class="back-button">Back</a>
        </div>
    </div>
    <h1>Senarai Pekerja</h1>
    <div class="container">
    
        <table>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>No. KP</th>
                <th>No. Telefon</th>
                <th>Jantina</th>
                <th>Tindakan</th>
            </tr>
            <?php
            require 'db.php';

            $sql_select = "SELECT id, nama, no_kp, hp, jantina FROM pekerja";
            $result = $conn->query($sql_select);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $id = $row['id'];
                    $name = htmlspecialchars($row['nama']);
                    $nokp = htmlspecialchars($row['no_kp']);
                    $hp = htmlspecialchars($row['hp']);
                    $gender = htmlspecialchars($row['jantina']);

                    echo "<tr>";
                    echo "<td>$id</td>";
                    echo "<td>$name</td>";
                    echo "<td>$nokp</td>";
                    echo "<td>$hp</td>";
                    echo "<td>$gender</td>";
                    echo "<td>";
                    echo "<a href='update_employee.php?id=$id' class='update-button'>Update</a>";
                    echo "<a href='javascript:void(0);' onclick='confirmDelete($id)' class='delete-button'>Delete</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Tiada pekerja</td></tr>";
            }
            $conn->close();
            ?>
        </table>
    </div>

    <!-- Delete Modal -->
    <div id="deleteModal" class="modal">
        <div class="modal-content">
            <div class="delete-modal-header" id="modalHeader">DELETE</div>
            <div class="delete-modal-text" id="modalText">Adakah anda pasti untuk menghapuskan rekod ini? Sila pastikan dengan betul!</div>
            <div class="modal-buttons"><hr>
                <button id="btnYes" class="btn btn-yes">Yes, Delete</button>
                <button id="btnCancel" class="btn btn-cancel">Cancel</button>
            </div>
        </div>
    </div>

    <script>
        function confirmDelete(id) {
            var modal = document.getElementById('deleteModal');
            var btnYes = document.getElementById('btnYes');
            var btnCancel = document.getElementById('btnCancel');

            modal.style.display = 'block';

            btnYes.onclick = function() {
                // Redirect to delete script or perform delete action
                window.location.href = 'delete_employee.php?id=' + id;
            }

            btnCancel.onclick = function() {
                modal.style.display = 'none';
            }

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = 'none';
                }
            }
        }
    </script>
</body
