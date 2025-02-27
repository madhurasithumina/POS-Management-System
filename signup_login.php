<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup & Login Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
            height: 100%;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #F49713; /* Background color set to #F49713 */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
            width: 320px;
            transition: transform 0.3s;
        }

        .container:hover {
            transform: translateY(-5px);
        }

        h1 {
            font-size: 32px;
            margin-bottom: 20px;
            color: #2c3e50;
            font-weight: 600;
        }

        button {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            font-size: 18px;
            font-weight: bold;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s;
            position: relative;
            overflow: hidden;
        }

        button:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
        }

        .signup-btn {
            background-color: #27ae60;
        }

        .signup-btn:hover {
            background-color: #218c54;
        }

        button::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: rgba(255, 255, 255, 0.2);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        button:hover::after {
            opacity: 1;
        }

        @media (max-width: 600px) {
            .container {
                width: 90%;
                padding: 30px;
            }

            h1 {
                font-size: 28px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Welcome!</h1>
        <form action="register.php" method="get">
            <button type="submit" class="signup-btn">Sign Up</button>
        </form>
        <form action="login.php" method="get">
            <button type="submit">Login</button>
        </form>
    </div>

</body>
</html>
