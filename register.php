<?php
include_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registration successful! Redirecting to login page...'); window.location.href='login.php';</script>";
    } else {
        echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
        .container {
            background-color: #F49713;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            font-size: 14px;
            color: #333;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            border-radius: 8px;
        }
        input[type="submit"]:hover {
            background-color: #2980b9;
        }
        .error {
            color: red;
            font-size: 12px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Register</h2>
    <form id="registerForm" method="POST" action="register.php">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
        <span id="usernameError" class="error"></span>
        
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        <span id="emailError" class="error"></span>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        <span id="passwordError" class="error"></span>

        <input type="submit" value="Register">
    </form>
</div>

<script>
document.getElementById('registerForm').addEventListener('submit', function(event) {
    let isValid = true;

    // Username validation
    const username = document.getElementById('username').value;
    if (username.length < 3) {
        isValid = false;
        document.getElementById('usernameError').textContent = 'Username must be at least 3 characters long';
    } else {
        document.getElementById('usernameError').textContent = '';
    }

    // Email validation
    const email = document.getElementById('email').value;
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (!emailPattern.test(email)) {
        isValid = false;
        document.getElementById('emailError').textContent = 'Invalid email format';
    } else {
        document.getElementById('emailError').textContent = '';
    }

    // Password validation
    const password = document.getElementById('password').value;
    if (password.length < 6) {
        isValid = false;
        document.getElementById('passwordError').textContent = 'Password must be at least 6 characters long';
    } else {
        document.getElementById('passwordError').textContent = '';
    }

    // If form is invalid, prevent submission
    if (!isValid) {
        event.preventDefault();
    }
});
</script>

</body>
</html>
