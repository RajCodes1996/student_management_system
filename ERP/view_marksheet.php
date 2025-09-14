<?php
$conn = new mysqli("localhost", "root", "", "school_erp");
$result = $conn->query("SELECT admission_no, student_name FROM student_admissions");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Marksheet</title>
    <style>
        body {
            font-family: 'Segoe UI';
            background: #f2f2f2;
            padding: 50px;
        }
        .box {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px #aaa;
            text-align: center;
        }
        select, button {
            padding: 10px;
            font-size: 16px;
            margin-top: 20px;
        }
        h2 {
            color: seagreen;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>View Student Marksheet</h2>
    <form action="marksheet.php" method="get">
        <label for="admission_no">Select Student:</label><br>
        <select name="admission_no" required>
            <option value="">-- Select --</option>
            <?php while($row = $result->fetch_assoc()): ?>
                <option value="<?= $row['admission_no'] ?>">
                    <?= $row['student_name'] ?> (<?= $row['admission_no'] ?>)
                </option>
            <?php endwhile; ?>
        </select><br>
        <button type="submit">Generate Marksheet</button>
    </form>
</div>

</body>
</html>
