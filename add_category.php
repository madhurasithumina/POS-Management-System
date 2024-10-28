<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People's Bank Form</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f2f5;
            font-family: 'Roboto', sans-serif;
            height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            width: 80%;
            max-width: 1200px;
            height: 80%;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background-color: #F49713;
            color: white;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .sidebar .logo h2 {
            color: #fff;
            margin-bottom: 50px;
            text-align: center;
            font-size: 24px;
        }

        .sidebar-menu {
            list-style-type: none;
            padding: 0;
        }

        .sidebar-menu li {
            margin-bottom: 20px;
        }

        .sidebar-menu li a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            display: block;
            padding: 12px;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.2s;
        }

        .sidebar-menu li a:hover,
        .sidebar-menu li a.active {
            background-color: #e67e22;
            transform: translateX(10px);
        }

        /* Main content */
        .main-content {
            flex-grow: 1;
            background-color: #fff;
            padding: 30px;
            overflow-y: auto;
        }

        h2 {
            color: #004d99;
            margin-bottom: 20px;
            font-size: 28px;
            font-weight: 700;
            padding-bottom: 10px;
            border-bottom: 2px solid #F49713;
        }

        form {
            margin-bottom: 40px;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        label {
            font-size: 18px;
            color: #333;
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 2px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        input[type="text"]:focus {
            border-color: #F49713;
            box-shadow: 0 0 8px rgba(244, 151, 19, 0.3);
            outline: none;
        }

        button {
            background-color: #F49713;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease, transform 0.2s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        button:hover {
            background-color: #e67e22;
            transform: scale(1.05);
        }

        button:focus {
            outline: none;
        }

        /* Media Queries */
        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }

            .container {
                width: 90%;
                height: 90%;
            }

            h2 {
                font-size: 24px;
            }
        }

        @media (max-width: 480px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .main-content {
                margin-left: 0;
            }

            .container {
                flex-direction: column;
                height: auto;
            }
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
                <li><a href="#">Dashboard</a></li>
                <li><a href="#" class="active">Add categories</a></li>
                <li><a href="#">Search categories</a></li>
                <li><a href="#">Time series</a></li>
                <li><a href="#">History</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </aside>

        <!-- Main content -->
        <div class="main-content">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Vendor Form Submission
                if (isset($_POST['vendor-name']) && isset($_POST['vendor-address'])) {
                    $vendorName = htmlspecialchars($_POST['vendor-name']);
                    $vendorAddress = htmlspecialchars($_POST['vendor-address']);
                    echo "<p>Vendor Added: <strong>$vendorName</strong>, Address: <strong>$vendorAddress</strong></p>";
                }

                // Model Number Form Submission
                if (isset($_POST['model-number'])) {
                    $modelNumber = htmlspecialchars($_POST['model-number']);
                    echo "<p>Model Number Added: <strong>$modelNumber</strong></p>";
                }

                // Serial Number Form Submission
                if (isset($_POST['serial-number'])) {
                    $serialNumber = htmlspecialchars($_POST['serial-number']);
                    echo "<p>Serial Number Added: <strong>$serialNumber</strong></p>";
                }

                // Terminal ID Form Submission
                if (isset($_POST['merchant-name']) && isset($_POST['merchant-id']) && isset($_POST['terminal-id'])) {
                    $merchantName = htmlspecialchars($_POST['merchant-name']);
                    $merchantID = htmlspecialchars($_POST['merchant-id']);
                    $terminalID = htmlspecialchars($_POST['terminal-id']);
                    echo "<p>Terminal Added: Merchant <strong>$merchantName</strong>, Merchant ID: <strong>$merchantID</strong>, Terminal ID: <strong>$terminalID</strong></p>";
                }
            }
            ?>

            <section>
                <h2>Add The Vendor</h2>
                <form method="POST">
                    <label for="vendor-name">Enter Vendor's Name:</label>
                    <input type="text" id="vendor-name" name="vendor-name" required>

                    <label for="vendor-address">Enter Vendor's Address:</label>
                    <input type="text" id="vendor-address" name="vendor-address" required>

                    <button type="submit">Confirm</button>
                </form>
            </section>

            <section>
                <h2>Add Category By Model Number</h2>
                <form method="POST">
                    <label for="model-number">Enter Model Number:</label>
                    <input type="text" id="model-number" name="model-number" required>

                    <button type="submit">Confirm</button>
                </form>
            </section>

            <section>
                <h2>Add Category By Serial Number</h2>
                <form method="POST">
                    <label for="serial-number">Enter Serial Number:</label>
                    <input type="text" id="serial-number" name="serial-number" required>

                    <button type="submit">Confirm</button>
                </form>
            </section>

            <section>
                <h2>Add Category By Terminal ID</h2>
                <form method="POST">
                    <label for="merchant-name">Enter Merchant Name:</label>
                    <input type="text" id="merchant-name" name="merchant-name" required>

                    <label for="merchant-id">Enter Merchant ID:</label>
                    <input type="text" id="merchant-id" name="merchant-id" required>

                    <label for="terminal-id">Enter Terminal ID:</label>
                    <input type="text" id="terminal-id" name="terminal-id" required>

                    <button type="submit">Confirm</button>
                </form>
            </section>
        </div>
    </div>
</body>
</html>
