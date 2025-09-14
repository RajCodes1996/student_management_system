<?php
// Start session
session_start();

// Database connection
$conn = new mysqli("localhost", "root", "", "school_erp");

$success = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    // Check if user already exists
    $check = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $check->bind_param("s", $username);
    $check->execute();
    $checkResult = $check->get_result();

    if ($checkResult->num_rows > 0) {
        $error = "Username already exists!";
    } else {
        // Hash password before storing
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert new user
        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $hashedPassword);

        if ($stmt->execute()) {
            $success = "Registration successful! You can now login.";
        } else {
            $error = "Error: Could not register. Please try again.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register - Smart ERP</title>
    <style>
        body {
            background-color: #f2f3f5;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 500px;
            margin: 60px auto;
            background-color: white;
            box-shadow: 0 0 10px green;
            border-radius: 8px;
            padding: 30px;
        }
        h2 {
            text-align: center;
            color: seagreen;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0 20px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #e9f0fe;
        }
        .register-btn {
            background-color: green;
            color: white;
            padding: 10px 25px;
            border: none;
            cursor: pointer;
            border-radius: 3px;
            width: 100%;
        }
        .error, .success {
            padding: 10px;
            text-align: center;
            border-radius: 5px;
            margin-bottom: 15px;
        }
        .error { background-color: #ffcccc; color: red; }
        .success { background-color: #ccffcc; color: green; }
    </style>
</head>
<body>

<div class="container">
    <h2>Register for Smart ERP</h2>

    <?php if ($error) echo "<div class='error'>$error</div>"; ?>
    <?php if ($success) echo "<div class='success'>$success</div>"; ?>

    <form method="POST">
        <label>Username</label>
        <input type="text" name="username" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <button class="register-btn" type="submit">REGISTER</button>
        <br>
        <br>
    </form>
     <a href="login.php"><button style="background-color:red; color:white; padding:10px">Login</button></a>
</div>

</body>
</html>