<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "school_erp";

$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM student_admissions ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>All Admissions</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f0f2f5;
        }
        h2 {
            text-align: center;
            padding: 10px;
        }
        table {
            width: 98%;
            margin: auto;
            border-collapse: collapse;
            background: white;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 6px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .back {
            display: block;
            text-align: center;
            margin: 15px;
        }
    </style>
</head>
<body>
    <a href="front_desk.php"><h2>Student Admission Records</h2></a>
    <!-- <a class="back" href="student_admission.php">← Back to Admission Form</a> -->
    <table>
        <tr>
            <th>ID</th>
            <th>Form No</th>
            <th>Admission No</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Class</th>
            <th>DOB</th>
            <th>Father Name</th>
            <th>Mother Name</th>
            <th>Mobile (F)</th>
            <th>Mobile (M)</th>
            <!-- Add more columns as needed -->
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['form_no']}</td>
                    <td>{$row['admission_no']}</td>
                    <td>{$row['student_name']}</td>
                    <td>{$row['gender']}</td>
                    <td>{$row['student_class']}</td>
                    <td>{$row['dob']}</td>
                    <td>{$row['father_name']}</td>
                    <td>{$row['mother_name']}</td>
                    <td>{$row['mobile_father']}</td>
                    <td>{$row['mobile_mother']}</td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='11' style='text-align:center;'>No records found</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
