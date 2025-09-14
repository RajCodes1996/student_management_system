<?php
$conn = new mysqli("localhost", "root", "", "school_erp");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM appointments";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Appointments List</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f9f9f9, #e0f7fa);
            margin: 0;
            padding: 40px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 12px 15px;
            text-align: center;
        }

        th {
            background-color: #0097a7;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e0f2f1;
            transition: 0.3s;
        }

        td {
            color: #333;
        }

        @media screen and (max-width: 768px) {
            table {
                font-size: 14px;
            }

            th, td {
                padding: 10px;
            }

            h2 {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
   <a href="front_desk.php"><h2>All Appointments</h2></a>
    <table>
        <tr>
            <th>ID</th>
            <th>Visitor Name</th>
            <th>Gender</th>
            <th>Organization</th>
            <th>Meeting Purpose</th>
            <th>Meet With</th>
            <th>Date</th>
            <th>Time</th>
            <th>Mobile</th>
            <th>Address</th>
            <th>City</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['visitor_name']}</td>
                    <td>{$row['gender']}</td>
                    <td>{$row['organization_name']}</td>
                    <td>{$row['meeting_purpose']}</td>
                    <td>{$row['meet_with']}</td>
                    <td>{$row['date']}</td>
                    <td>{$row['time']}</td>
                    <td>{$row['mobile']}</td>
                    <td>{$row['address']}</td>
                    <td>{$row['city']}</td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='11'>No Appointments Found</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>