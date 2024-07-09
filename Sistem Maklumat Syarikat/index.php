<!DOCTYPE html>
<html>
<head>
    <title>Sistem Maklumat Pekerja</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('gradient-dynamic-blue-lines-background_23-2148995756.avif');  /* Gantikan dengan URL gambar latar belakang anda */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: flex-start; /* Mengatur item ke atas */
            min-height: 100vh; /* Minimal tinggi viewport */
        }
        .container {
            background-color: rgba(255, 255, 255, 0.9);  /* Transparan putih */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 500px;
            text-align: center;
            margin-top: 50px; /* Jarak dari atas */
        }
        h1 {
            color: #333333;
        }
        .button-container {
            margin-top: 20px;
        }
        button {
            width: 100%;
            padding: 15px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            margin: 10px 0;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang Ke Sistem Maklumat Pekerja</h1>
        <div class="button-container">
            <button onclick="window.location.href='add_employee.php'">Tambah Pekerja</button>
            <button onclick="window.location.href='employee_list.php'">Senarai Pekerja</button>
        </div>
    </div>
</body>
</html>
