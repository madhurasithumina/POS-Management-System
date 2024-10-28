<?php
include_once 'config.php';

// Handle form submission to add a new vendor
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['vendor_name'])) {
    $vendor_name = $_POST['vendor_name'];

    // Query to insert the new vendor
    $insert_query = "INSERT INTO vendors (vendor_name) VALUES ('$vendor_name')";

    if (mysqli_query($conn, $insert_query)) {
        echo "<script>alert('Vendor added successfully');</script>";
    } else {
        echo "<script>alert('Error adding vendor');</script>";
    }
}

// Handle delete action
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    // Query to delete the vendor by id
    $delete_query = "DELETE FROM vendors WHERE id = '$delete_id'";

    if (mysqli_query($conn, $delete_query)) {
        echo "<script>alert('Vendor deleted successfully');</script>";
    } else {
        echo "<script>alert('Error deleting vendor');</script>";
    }
}

// Fetch all vendors from the database
$vendor_query = "SELECT * FROM vendors";
$vendor_result = mysqli_query($conn, $vendor_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Vendors</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f7fc;
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
        form {
            display: flex;
            flex-direction: column;
            margin-bottom: 40px;
        }
        label {
            font-size: 16px;
            margin-bottom: 5px;
        }
        input[type="text"] {
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
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #2980b9;
        }
        .btn-delete {
            background-color: #e74c3c;
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
        }
        .btn-delete:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>

    <div class="navbar">
        POS Terminal Stock Management
        <a href="index.php">Home</a>
        <a href="add_terminal.php">Add Terminal</a>
        <a href="view_terminals.php">View Terminals</a>
        <a href="reports.php">Reports</a>
    </div>

    <div class="container">
        <h1>Manage Vendors</h1>

        <!-- Form to add a new vendor -->
        <form action="vendors.php" method="POST">
            <label for="vendor_name">Vendor Name</label>
            <input type="text" name="vendor_name" id="vendor_name" placeholder="Enter Vendor Name" required>
            <input type="submit" value="Add Vendor">
        </form>

        <!-- Display existing vendors -->
        <h2>Existing Vendors</h2>
        <table>
            <thead>
                <tr>
                    <th>Vendor ID</th>
                    <th>Vendor Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($vendor_result)): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['vendor_name']; ?></td>
                    <td>
                        <a href="vendors.php?delete_id=<?php echo $row['id']; ?>" class="btn-delete" onclick="return confirm('Are you sure you want to delete this vendor?');">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>
</html>
