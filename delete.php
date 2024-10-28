<?php
include_once 'config.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql = "DELETE FROM users WHERE id = '$user_id'";
    if ($conn->query($sql) === TRUE) {
        session_destroy();
        header("Location: register.php");
    } else {
        echo "<script>alert('Error deleting account!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Account</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .delete-container {
            background-color: #F49713;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }
        h1 {
            margin-bottom: 20px;
            color: #333;
        }
        .button {
            display: inline-block;
            background-color: #e74c3c;
            color: #fff;
            padding: 10px 20px;
            margin-top: 20px;
            text-decoration: none;
            border-radius: 8px;
            font-size: 16px;
            transition: background-color 0.3s ease;
            cursor: pointer;
            border: none;
        }
        .button:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>

<div class="delete-container">
    <h1>Are you sure you want to delete your account?</h1>
    <form method="POST" action="delete.php" onsubmit="return confirmDelete()">
        <input type="submit" value="Yes, Delete My Account" class="button">
    </form>
</div>

<script>
    function confirmDelete() {
        return confirm("Are you sure you want to delete your account? This action is irreversible.");
    }
</script>

</body>
</html>
