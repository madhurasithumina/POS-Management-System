<!-- public/index.php -->
<?php
include_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS Terminal Stock Management</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #F49713;
            margin: 0;
            padding: 0;
            color: #333;
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
            padding: 50px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        h1 {
            font-size: 36px;
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
        }
        p {
            font-size: 18px;
            text-align: center;
            margin-bottom: 50px;
            color: #7f8c8d;
        }
        .cards-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .card {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-bottom: 20px;
            flex: 1;
            min-width: 22%;
            max-width: 22%;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }
        .card h3 {
            font-size: 24px;
            margin-bottom: 15px;
            color: #34495e;
        }
        .card p {
            font-size: 16px;
            color: #7f8c8d;
            margin-bottom: 20px;
        }
        .card i {
            font-size: 50px;
            margin-bottom: 15px;
            color: #3498db;
        }
        .btn {
            display: inline-block;
            padding: 12px 25px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #2980b9;
        }
        .footer {
            background-color: #3a3f58;
            color: #fff;
            text-align: center;
            padding: 15px 0;
            margin-top: 50px;
            font-size: 14px;
        }
        @media (max-width: 768px) {
            .cards-container {
                flex-direction: column;
                align-items: center;
            }
            .card {
                max-width: 90%;
            }
        }
    </style>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        POS Terminal Stock Management
        <a href="add_terminal.php"><i class="fas fa-plus"></i> Add Terminal</a>
        <a href="view_terminals.php"><i class="fas fa-list"></i> View Terminals</a>
        <a href="reports.php"><i class="fas fa-chart-line"></i> Reports</a>
        <a href="index.php"><i class="fas fa-chart-line"></i> Logout</a>
    </div>

    <!-- Main Content -->
    <div class="container">
        <h1>Welcome to the POS Terminal Stock Management System</h1>
        <p>Select an option below to get started</p>
        
        <div class="cards-container">
            <div class="card">
                <i class="fas fa-server"></i>
                <h3>Total Terminals</h3>
                <p>Check and manage all POS terminals in stock.</p>
                <a href="view_terminals.php" class="btn">View Terminals</a>
            </div>
            
            <div class="card">
                <i class="fas fa-plus-circle"></i>
                <h3>Add Terminal</h3>
                <p>Add new POS terminals to the system.</p>
                <a href="add_terminal.php" class="btn">Add Terminal</a>
            </div>

            <div class="card">
                <i class="fas fa-building"></i>
                <h3>Manage Vendors</h3>
                <p>Manage all POS terminal vendors and their products.</p>
                <a href="vendors.php" class="btn">Manage Vendors</a>
            </div>

            <div class="card">
                <i class="fas fa-chart-pie"></i>
                <h3>Generate Reports</h3>
                <p>Get detailed reports on stock levels and terminal performance.</p>
                <a href="reports.php" class="btn">Generate Reports</a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        &copy; 2024 POS Terminal Stock Management. All rights reserved.
    </div>

</body>
</html>
