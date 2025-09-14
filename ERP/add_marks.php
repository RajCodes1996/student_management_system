<?php
// Connect to database
$conn = new mysqli("localhost", "root", "", "school_erp");

// Insert data on form submit
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admission_no = $_POST['admission_no'];
    $student_name = $_POST['student_name'];
    $class = $_POST['class'];
    $section = $_POST['section'];
    $subject = $_POST['subject'];
    $marks_obtained = $_POST['marks_obtained'];
    $total_marks = $_POST['total_marks'];

    $sql = "INSERT INTO marksheet (admission_no, student_name, class, section, subject, marks_obtained, total_marks) 
            VALUES ('$admission_no', '$student_name', '$class', '$section', '$subject', '$marks_obtained', '$total_marks')";

    if ($conn->query($sql) === TRUE) {
        $message = "✅ Marksheet entry added successfully!";
    } else {
        $message = "❌ Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Marksheet Entry</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f2f7ff;
            padding: 40px;
        }

        .container {
            width: 600px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #007BFF;
        }

        form label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        form input, form select {
            width: 100%;
            padding: 10px;
            font-size: 15px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form button {
            margin-top: 25px;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            width: 100%;
        }

        .message {
            margin-top: 20px;
            text-align: center;
            font-weight: bold;
            color: green;
        }

        .error {
            color: red;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 15px;
            text-decoration: none;
            color: #007BFF;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Add Student Marksheet Entry</h2>

    <?php if (!empty($message)) : ?>
        <div class="message"><?= $message ?></div>
    <?php endif; ?>

    <form method="POST">
        <label>Admission No</label>
        <input type="text" name="admission_no" required>

        <label>Student Name</label>
        <input type="text" name="student_name" required>

        <label>Class</label>
        <input type="text" name="class" required>

        <label>Section</label>
        <input type="text" name="section" required>

        <label>Subject</label>
        <input type="text" name="subject" required>

        <label>Marks Obtained</label>
        <input type="number" name="marks_obtained" min="0" required>

        <label>Total Marks</label>
        <input type="number" name="total_marks" min="0" required>

        <button type="submit">➕ Add Entry</button>
    </form>

    <a href="marksheet.php">🔙 Back to Marksheet Viewer</a>
</div>

</body>
</html>
