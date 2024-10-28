<?php
// You can add any necessary PHP logic here, such as connecting to a database or fetching dynamic data.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            background-color: #f4f7fc;
        }

        .container {
            display: flex;
            width: 100%;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background-color: #F49713;
            color: white;
            padding: 20px;
            height: 100vh;
            position: fixed;
        }

        .sidebar .logo h2 {
            color: #ecf0f1;
            margin-bottom: 50px;
            text-align: center;
        }

        .sidebar-menu {
            list-style-type: none;
            padding: 0;
        }

        .sidebar-menu li {
            margin-bottom: 20px;
        }

        .sidebar-menu li a {
            color: #ecf0f1;
            text-decoration: none;
            font-weight: 600;
            display: block;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .sidebar-menu li a:hover,
        .sidebar-menu li a.active {
            background-color: #2c3e50;
        }

        /* Main Content */
        .main-content {
            margin-left: 250px;
            padding: 20px;
            width: calc(100% - 250px);
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .top-bar .search-bar input {
            padding: 10px;
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .top-bar .user-menu {
            display: flex;
            align-items: center;
        }

        .top-bar .user-menu span {
            margin-right: 15px;
            font-weight: 600;
        }

        .top-bar .user-avatar img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        /* Dashboard Content */
        .dashboard .stats {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
        }

        .stat-box {
            background-color: #fff;
            padding: 20px;
            width: 23%;
            text-align: center;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .stat-box h3 {
            font-size: 18px;
            color: #333;
            margin-bottom: 10px;
        }

        .stat-box p {
            font-size: 22px;
            font-weight: 600;
            color: #3498db;
        }

        .recent-activities {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .recent-activities h2 {
            font-size: 22px;
            margin-bottom: 20px;
            color: #333;
        }

        .recent-activities ul {
            list-style-type: none;
            padding: 0;
        }

        .recent-activities ul li {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            font-size: 16px;
        }

        .recent-activities ul li strong {
            color: #3498db;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">
                <h2>Admin Panel</h2>
            </div>
            <ul class="sidebar-menu">
                <li><a href="#" class="active">Dashboard</a></li>
                <li><a href="add_category.php">Add categories</a></li>
                <li><a href="#">Search categories</a></li>
                <li><a href="#">Time series</a></li>
                <li><a href="#">History</a></li>
                <li><a href="#" onclick="logout()">Logout</a></li> <!-- Logout button -->
            </ul>
        </aside>

        <!-- Main content -->
        <div class="main-content">
            <!-- Top Bar -->
            <header class="top-bar">
                <div class="search-bar">
                    <input type="text" placeholder="Search...">
                </div>
                <div class="user-menu">
                    <span>Admin Name</span>
                    <div class="user-avatar">
                        <img src="user-avatar.png" alt="User Avatar">
                    </div>
                </div>
            </header>

            <!-- Dashboard Content -->
            <section class="dashboard">
                <!-- Quick Stats -->
                <div class="stats">
                    <div class="stat-box">
                        <h3>Total Users</h3>
                        <p>1200</p>
                    </div>
                    <div class="stat-box">
                        <h3>Total Sales</h3>
                        <p>$35,000</p>
                    </div>
                    <div class="stat-box">
                        <h3>Pending Orders</h3>
                        <p>85</p>
                    </div>
                    <div class="stat-box">
                        <h3>Issues</h3>
                        <p>3</p>
                    </div>
                </div>

                <!-- Recent Activities -->
                <div class="recent-activities">
                    <h2>Recent Activities</h2>
                    <ul>
                        <li>User <strong>John Doe</strong> updated profile</li>
                        <li>Order <strong>#1234</strong> marked as shipped</li>
                        <li>Admin <strong>Jane Smith</strong> added a new product</li>
                    </ul>
                </div>
            </section>
        </div>
    </div>

    <script>
        function logout() {
            // Show alert before redirecting
            alert('You have been logged out.');
            // Redirect to the admin login page
            window.location.href = 'admin_login.php';
        }
    </script>
</body>
</html>
