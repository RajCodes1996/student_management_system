<?php
// view_enquiries.php
$conn = new mysqli("localhost", "root", "", "school_erp");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM student_enquiries ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Enquiries - Smart ERP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 20px;
        }
        h2 {
            text-align: center;
            color: #004d00;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 25px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #006400;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        a {
            text-decoration: none;
            color: #006400;
        }
    </style>
</head>
<body>

<a href="front_desk.php"><h2>Student Enquiry List</h2></a>

<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Student Name</th>
            <th>DOB</th>
            <th>Class</th>
            <th>Father Name</th>
            <th>Mother Name</th>
            <th>Primary Contact</th>
            <th>Address</th>
            <th>City</th>
            <th>Pin</th>
        </tr>
    </thead>

    <tbody>
        <?php if ($result->num_rows > 0): 
            $i = 1;
            while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= htmlspecialchars($row['student_name']) ?></td>
                    <td><?= htmlspecialchars($row['dob']) ?></td>
                    <td><?= htmlspecialchars($row['class']) ?></td>
                    <td><?= htmlspecialchars($row['father_name']) ?></td>
                    <td><?= htmlspecialchars($row['mother_name']) ?></td>
                    <td><?= htmlspecialchars($row['primary_contact']) ?></td>
                    <td><?= htmlspecialchars($row['address']) ?></td>
                    <td><?= htmlspecialchars($row['city']) ?></td>
                    <td><?= htmlspecialchars($row['pin_code']) ?></td>
                </tr>
        <?php endwhile; else: ?>
            <tr><td colspan="10" style="text-align:center;">No enquiries found.</td></tr>
        <?php endif; ?>
    </tbody>
</table>

</body>
</html>

<?php $conn->close(); ?>
