<?php
$conn = new mysqli("localhost", "root", "", "school_erp");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $new_pass = password_hash($_POST['new_password'], PASSWORD_BCRYPT);

    $check = $conn->query("SELECT * FROM users WHERE username = '$username'");
    if ($check->num_rows == 1) {
        $conn->query("UPDATE users SET password = '$new_pass' WHERE username = '$username'");
        $msg = "Password updated successfully.";
    } else {
        $error = "Username not found.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reset Password - Smart ERP</title>
    <style>
        body { background-color: #f2f3f5; font-family: Arial; }
        .container { max-width: 500px; margin: 60px auto; background: white; border-radius: 8px; box-shadow: 0 0 10px orange; }
        .header { background-color: darkorange; color: white; padding: 20px; border-top-left-radius: 8px; border-top-right-radius: 8px; }
        form { padding: 30px; }
        input[type="text"], input[type="password"] {
            width: 100%; padding: 12px; margin-bottom: 20px;
            background-color: #fff4e6; border: 1px solid #ccc; border-radius: 4px;
        }
        .btn { background-color: orange; color: white; padding: 10px 25px; border: none; cursor: pointer; border-radius: 3px; }
        .error { color: red; margin-bottom: 10px; }
        .msg { color: green; margin-bottom: 10px; }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h2>Reset Password</h2>
    </div>
    <form method="POST">
        <label>USERNAME</label>
        <input type="text" name="username" required>

        <label>NEW PASSWORD</label>
        <input type="password" name="new_password" required>

        <?php 
        if (isset($error)) echo "<p class='error'>$error</p>";
        if (isset($msg)) echo "<p class='msg'>$msg</p>";
        ?>

        <button class="btn" type="submit">RESET PASSWORD</button>
    </form>
</div>
</body>
</html>
