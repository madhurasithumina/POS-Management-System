<?php
include_once "config.php";

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $vendor = $_POST['vendor'];
    $model = $_POST['model'];
    $serial_number = $_POST['serial_number'];
    $terminal_type = $_POST['terminal_type'];
    $status = $_POST['status'];
    $purchase_date = $_POST['purchase_date'];

    $query = "INSERT INTO terminals (vendor, model, serial_number, terminal_type, status, purchase_date) 
              VALUES ('$vendor', '$model', '$serial_number', '$terminal_type', '$status', '$purchase_date')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Terminal added successfully');</script>";
    } else {
        echo "<script>alert('Error adding terminal: " . mysqli_error($conn) . "');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New POS Terminal</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #F49713;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #3a3f58;
            color: #fff;
            padding: 20px;
            text-align: center;
            font-size: 20px;
            letter-spacing: 1px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .navbar a {
            color: #fff;
            margin: 0 15px;
            text-decoration: none;
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .navbar a:hover {
            background-color: #575a74;
        }
        .container {
            max-width: 700px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            font-size: 28px;
            margin-bottom: 30px;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            font-size: 16px;
            color: #333;
            margin-bottom: 5px;
        }
        input, select {
            padding: 10px;
            font-size: 16px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #2980b9;
        }
        .error {
            color: red;
            font-size: 14px;
            display: none;
        }
    </style>
    <script>
        function validateForm() {
            let serial = document.getElementById('serial_number').value;
            let error = document.getElementById('serial_error');

            if (serial.length < 5) {
                error.style.display = 'block';
                error.innerText = "Serial number must be at least 5 characters long.";
                return false;
            } else {
                error.style.display = 'none';
                return true;
            }
        }
    </script>
</head>
<body>

    <div class="navbar">
        POS Terminal Stock Management
        <a href="start_page.php">Home</a>
        <a href="view_terminals.php">View Terminals</a>
        <a href="reports.php">Reports</a>
    </div>

    <div class="container">
        <h1>Add New POS Terminal</h1>

        <form action="add_terminal.php" method="POST" onsubmit="return validateForm();">
            <label for="vendor">Vendor</label>
            <select name="vendor" id="vendor" required>
                <option value="Vendor A">Vendor A</option>
                <option value="Vendor B">Vendor B</option>
                <option value="Vendor C">Vendor C</option>
                <option value="Vendor D">Vendor D</option>
            </select>

            <label for="model">Model</label>
            <input type="text" name="model" id="model" placeholder="POS Model" required>

            <label for="serial_number">Serial Number</label>
            <input type="text" name="serial_number" id="serial_number" placeholder="Serial Number" required>
            <span class="error" id="serial_error"></span>

            <label for="terminal_type">Terminal Type</label>
            <select name="terminal_type" id="terminal_type" required>
                <option value="Wireless">Wireless</option>
                <option value="Wired">Wired</option>
                <option value="mPOS">mPOS</option>
            </select>

            <label for="status">Status</label>
            <select name="status" id="status" required>
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
                <option value="Maintenance">Maintenance</option>
            </select>

            <label for="purchase_date">Purchase Date</label>
            <input type="date" name="purchase_date" id="purchase_date" required>

            <input type="submit" value="Add Terminal">
        </form>
    </div>

</body>
</html>
