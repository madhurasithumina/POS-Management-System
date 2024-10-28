<?php
include_once "config.php";

// Query to get terminal count grouped by type
$type_query = "SELECT terminal_type, COUNT(*) as count FROM terminals GROUP BY terminal_type";
$type_result = mysqli_query($conn, $type_query);

// Query to get terminal count grouped by status
$status_query = "SELECT status, COUNT(*) as count FROM terminals GROUP BY status";
$status_result = mysqli_query($conn, $status_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS Terminal Reports</title>
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
            margin-bottom: 40px;
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
        <a href="view_terminals.php">View Terminals</a>
    </div>

    <div class="container">
        <h1>POS Terminal Reports</h1>

        <h2>Terminal Count by Type</h2>
        <table>
            <thead>
                <tr>
                    <th>Terminal Type</th>
                    <th>Count</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($type_result)): ?>
                <tr>
                    <td><?php echo $row['terminal_type']; ?></td>
                    <td><?php echo $row['count']; ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <h2>Terminal Count by Status</h2>
        <table>
            <thead>
                <tr>
                    <th>Status</th>
                    <th>Count</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($status_result)): ?>
                <tr>
                    <td><?php echo $row['status']; ?></td>
                    <td><?php echo $row['count']; ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <a href="Generate_report.php" class="btn">Generate report</a>
    </div>

</body>
</html>
