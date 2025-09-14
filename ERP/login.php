<?php
session_start();
$conn = new mysqli("localhost", "root", "", "school_erp");

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Secure query to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();

    $result = $stmt->get_result();
    
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Use password_verify to check hashed password
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
            exit();
        } else {
            $error = "Invalid credentials!";
        }
    } else {
        $error = "Invalid credentials!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login to Smart ERP</title>
    <style>
        body {
            background-color: #f2f3f5;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 500px;
            margin: 60px auto;
            background-color: white;
            box-shadow: 0 0 10px blue;
            border-radius: 8px;
            position: absolute;
            top:120px;
            right:310px;
        }
        .header {
            background-color: seagreen;
            color: white;
            padding: 20px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }
        .header h2 {
            margin: 0;
            font-size: 20px;
        }
        .header small {
            font-size: 12px;
        }
        form {
            padding: 30px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0 20px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #e9f0fe;
        }
        .login-btn {
            background-color: blue;
            color: white;
            padding: 10px 25px;
            border: none;
            cursor: pointer;
            border-radius: 3px;
        }
        .error {
            color: red;
            margin-top: -15px;
            margin-bottom: 10px;
        }
        .footer{
            position: absolute;
            top:590px;
            left:780px;
            background-color:seagreen;
            color:white;
            width:500px;
        }
    </style>
</head>
<body>

<div id="asp_top">
<img src="images/headd.jpg">
</div>

<div id="asp_head">
<img src="images/asp_head.jpg">
</div>

    <div class="container">
        <div class="header">
            <h2>Login to Smart Erp</h2>
            <small>Enter your credentials below</small>
        </div>
        <form method="POST" >
            <label>USERNAME</label>
            <input type="text" name="username" required>

            <label>PASSWORD</label>
            <input type="password" name="password" required>

            <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>

            <button class="login-btn" type="submit">LOGIN</button>
        </form>
    </div>
    <div id="asp_foot">
<img src="images/asp_foot.jpg">
</div>

<center><footer class="footer"><i><h3>Developed by @Sourabh Dutt Vishwakarma</h3><i></footer></center>

</body>
</html>
