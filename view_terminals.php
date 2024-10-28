<?php
include_once "config.php";

// Fetch all terminals from the database
$query = "SELECT * FROM terminals";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View POS Terminals</title>
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
            max-width: 1000px;
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
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #3498db;
            color: #fff;
        }
        tr:hover {
            background-color: #f2f2f2;
        }
        .btn {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            display: inline-block;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

    <div class="navbar">
        POS Terminal Stock Management
        <a href="start_page.php">Home</a>
        <a href="add_terminal.php">Add Terminal</a>
        <a href="reports.php">Reports</a>
    </div>

    <div class="container">
        <h1>POS Terminal Inventory</h1>

        <?php if (mysqli_num_rows($result) > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Vendor</th>
                    <th>Model</th>
                    <th>Serial Number</th>
                    <th>Terminal Type</th>
                    <th>Status</th>
                    <th>Purchase Date</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['vendor']; ?></td>
                    <td><?php echo $row['model']; ?></td>
                    <td><?php echo $row['serial_number']; ?></td>
                    <td><?php echo $row['terminal_type']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td><?php echo $row['purchase_date']; ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <?php else: ?>
            <p>No terminals found in the database.</p>
        <?php endif; ?>

        <a href="add_terminal.php" class="btn">Add New Terminal</a>
    </div>

</body>
</html>
