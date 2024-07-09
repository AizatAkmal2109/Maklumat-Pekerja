<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pekerja</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('gradient-dynamic-blue-lines-background_23-2148995756.avif');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: flex-start; /* Mengatur item ke atas */
            min-height: 100vh; /* Minimal tinggi viewport */
        }
        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
            margin-top: 50px; /* Jarak dari atas */
            text-align: center; /* Pusatkan konten di tengah */
        }
        h1 {
            color: #333333;
        }
        form {
            margin-top: 20px;
            text-align: left; /* Atur label dan input ke kiri */
        }
        label {
            display: block;
            margin-bottom: 10px;
            text-align: left; /* Atur label ke kiri */
        }
        input, select {
            width: calc(100% - 24px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            text-align: left; /* Atur input ke kiri */
        }
        button {
            width: 29%;
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            transition: background-color 0.3s ease;
        }
        button.cancel {
            background-color: #ccc;
            color: #333;
            margin-right: 10px;
        }
        button.cancel:hover {
            background-color: #bbb;
        }
        button.Add {
            background-color: #4CAF50;
            color: white;
        }
        button.Add:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>ADD MAKLUMAT</h1>
        <form method="POST" action="process_add.php">
        <label for="nokp">IC:</label>
        <input type="text" id="nokp" name="nokp" required><br>
            <label for="name">NAMA:</label>
            <input type="text" id="name" name="name" required><br>
            <label for="hp">HP:</label>
            <input type="text" id="hp" name="hp" required><br>
            <label for="gender">JANTINA:</label>
            <select id="gender" name="gender" required>
                <option value="" disabled selected>--Sila Pilih--</option>
                <option value="Lelaki">Lelaki</option>
                <option value="Perempuan">Perempuan</option>
            </select><br>
            <button type="submit" class="Add">Add</button>
            <button type="button" class="clear" onclick="window.location.href='index.php'">Clear</button>
        </form>
    </div>
</body>
</html>
