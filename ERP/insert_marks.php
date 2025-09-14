<?php
$conn = new mysqli("localhost", "root", "", "school_erp");

$success = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admission_no = $_POST['admission_no'];
    $subjects = $_POST['subject'];
    $marks = $_POST['marks'];
    $totals = $_POST['total'];

    for ($i = 0; $i < count($subjects); $i++) {
        $subject = $conn->real_escape_string($subjects[$i]);
        $mark = (int)$marks[$i];
        $total = (int)$totals[$i];

        $sql = "INSERT INTO student_marks (admission_no, subject, marks, total) 
                VALUES ('$admission_no', '$subject', '$mark', '$total')";

        if (!$conn->query($sql)) {
            $error = "Error inserting marks: " . $conn->error;
            break;
        }
    }

    if (!$error) {
        $success = "Marks inserted successfully!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Insert Student Marks</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #eef6ff;
            padding: 40px;
        }
        .form-container {
            max-width: 700px;
            margin: auto;
            background: #fff;
            border: 2px solid #4CAF50;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 0 10px #ccc;
        }
        h2 {
            color: #4CAF50;
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        input[type="text"], input[type="number"] {
            width: 90%;
            padding: 10px;
            border: 1px solid #aaa;
            border-radius: 5px;
        }
        .btn {
            background: #4CAF50;
            color: white;
            padding: 10px 30px;
            border: none;
            border-radius: 5px;
            display: block;
            margin: 20px auto 0;
            cursor: pointer;
        }
        .success { color: green; text-align: center; margin-bottom: 10px; }
        .error { color: red; text-align: center; margin-bottom: 10px; }
        table {
            width: 100%;
            margin-top: 15px;
        }
        table td {
            padding: 5px;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Enter Student Marks</h2>

    <?php if ($success): ?>
        <div class="success"><?= $success ?></div>
    <?php elseif ($error): ?>
        <div class="error"><?= $error ?></div>
    <?php endif; ?>

    <form method="POST">
        <div class="form-group">
            <label><strong>Admission Number:</strong></label><br>
            <input type="text" name="admission_no" required>
        </div>

        <table>
            <tr>
                <th>Subject</th>
                <th>Marks Obtained</th>
                <th>Total Marks</th>
            </tr>
            <?php for ($i = 0; $i < 5; $i++): ?>
            <tr>
                <td><input type="text" name="subject[]" placeholder="e.g. Maths" required></td>
                <td><input type="number" name="marks[]" min="0" required></td>
                <td><input type="number" name="total[]" min="1" required></td>
            </tr>
            <?php endfor; ?>
        </table>

        <button class="btn" type="submit">Save Marks</button>
        <br>
    </form>
    <a href="marksheet.php"><button class="btn" type="submit" style="background:red; color:white">View Marks</button></a>
</div>

</body>
</html>
