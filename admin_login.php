<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="admin_login.css"> <!-- Ensure you have this CSS file -->
    <style>
        body {
            background-color: #F49713; /* Background color set to #F49713 */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Poppins', sans-serif;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
            width: 320px;
        }

        h1 {
            margin-bottom: 20px;
            color: #2c3e50;
        }

        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2980b9;
        }

        #error-message {
            margin-top: 10px;
            color: red;
        }

        .back-menu {
            margin-top: 20px;
        }

        .back-menu button {
            padding: 10px 20px;
            background-color: #e74c3c;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .back-menu button:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Admin Login</h1>
        <form id="loginForm" onsubmit="return validateLogin()">
            <div class="input-group">
                <label for="username">Admin Name:</label>
                <input type="text" id="username" name="username" placeholder="Enter admin name" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter password" required>
            </div>
            <div class="input-group">
                <button type="submit">Login</button>
            </div>
        </form>
        <p id="error-message"></p>

        <!-- Back to Main Menu Button -->
        <div class="back-menu">
            <button onclick="window.location.href='index.php'">Back to Main Menu</button>
        </div>
    </div>

    <script>
        function validateLogin() {
            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;
            const errorMessage = document.getElementById("error-message");

            if (username === "admin" && password === "1234") {
                window.location.href = "admin_dashboard.php";  // Redirect to admin dashboard
                return false; // Prevent form submission
            } else {
                errorMessage.textContent = "Invalid admin name or password!";
                errorMessage.style.color = "red";
                return false;
            }
        }
    </script>
</body>
</html>
