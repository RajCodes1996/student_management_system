<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Smart ERP</title>
    <style>
        body {
            background-color: #f2f3f5;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: seagreen;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            background-color: white;
            box-shadow: 0 0 10px blue;
            border-radius: 8px;
            padding: 30px;
        }

        h2 {
            color: #333;
        }

        p {
            font-size: 18px;
            color: #444;
        }

        .logout-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: red;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 20px;
        }

        .logout-btn:hover {
            background-color: darkred;
        }

        .footer {
            text-align: center;
            padding: 15px;
            background-color: black;
            color: white;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        #navigate{
            position: absolute;
            right:750px;
        }

    </style>
</head>
<body>

    <div class="header">
        <h1>Smart ERP Dashboard</h1>
        <h2 style="background-color:blue; color:white">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    </div>

    <div class="container">
        <h2>Dashboard Overview</h2>
        <p>This is your ERP dashboard. You can manage your school data, view reports, and perform admin actions from here.</p>
        <a class="logout-btn" href="logout.php">Logout</a>
    </div>
   
    <div id="navigate"><h2><a href="main.php">Go To The Main Page!</a></div>

    <div class="footer">
        <h2>Developed by @Rajarshi-Yadav</h2>
    </div>

</body>
</html>
