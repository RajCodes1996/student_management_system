<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Smart ERP</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(to right, #4caf50, #2e7d32);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: white;
            color: #333;
            padding: 40px 60px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            text-align: center;
            width: 400px;
        }

        h1 {
            font-size: 32px;
            margin-bottom: 20px;
            color: #2e7d32;
        }

        p {
            margin-bottom: 30px;
            font-size: 16px;
            color: #555;
        }

        .btn {
            padding: 12px 25px;
            margin: 10px;
            font-size: 16px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn:hover {
            background-color: #388e3c;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Welcome to Smart ERP</h1>
    <p>Your complete School Management Software</p>

    <a href="login.php" class="btn">Login</a>
    <a href="register.php" class="btn">Register</a>
</div>

</body>
</html>