<?php
include_once 'config.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE id = '$user_id'";
$result = $conn->query($sql);
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account</title>
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
        .account-container {
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
        .email {
            margin-bottom: 20px;
            color: #555;
            font-size: 18px;
        }
        .button {
            display: inline-block;
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            margin: 10px;
            text-decoration: none;
            border-radius: 8px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #2980b9;
        }
        .button.delete {
            background-color: #e74c3c;
        }
        .button.delete:hover {
            background-color: #c0392b;
        }
        .logout-btn {
            background-color: #2ecc71;
        }
        .logout-btn:hover {
            background-color: #27ae60;
        }
        .back-menu {
            margin-top: 20px; /* Add some spacing above the back button */
        }
    </style>
</head>
<body>

<div class="account-container">
    <h1>Welcome, <?php echo htmlspecialchars($user['username']); ?>!</h1>
    
    <!-- Display the user's email -->
    <div class="email">Email: <?php echo htmlspecialchars($user['email']); ?></div>
    
    <!-- Action buttons -->
    <a href="update.php" class="button">Update Profile</a>
    <a href="delete.php" class="button delete" onclick="return confirmDelete()">Delete Account</a>
    <a href="logout.php" class="button logout-btn">Logout</a>

    <!-- Back to Main Menu Button -->
    <div class="back-menu">
        <a href="start_page.php" class="button">Back to Main Menu</a>
    </div>
</div>

<script>
    function confirmDelete() {
        return confirm("Are you sure you want to delete your account? This action is irreversible.");
    }
</script>

</body>
</html>
