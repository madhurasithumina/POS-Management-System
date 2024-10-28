<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Started</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f7fc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
        }
        .button {
            background-color: #F49713;
            color: white;
            border: none;
            padding: 15px 30px;
            font-size: 18px;
            font-weight: 600;
            text-transform: uppercase;
            border-radius: 8px;
            cursor: pointer;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease, transform 0.2s;
        }
        .button:hover {
            background-color: #e9860c;
            transform: scale(1.05);
        }
        .button:active {
            background-color: #d4740b;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome!</h1>
        <p>Ready to get started? Click below:</p>
        <a href="sign_in_type.php">
            <button class="button">Get Started</button>
        </a>
    </div>
</body>
</html>
