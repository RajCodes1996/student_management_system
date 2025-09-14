<?php
$conn = new mysqli("localhost", "root", "", "school_erp");

$admission_no = isset($_POST['admission_no']) ? trim($_POST['admission_no']) : '';
$dropdown_sql = "SELECT DISTINCT admission_no FROM marksheet";
$dropdown_result = $conn->query($dropdown_sql);

$student = [];
$subjects = [];

if (!empty($admission_no)) {
    $sql = "SELECT * FROM marksheet WHERE LOWER(admission_no) = LOWER('$admission_no')";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $student = [
                'admission_no' => $row['admission_no'],
                'student_name' => $row['student_name'],
                'class' => $row['class'],
                'section' => $row['section']
            ];
            $subjects[] = [
                'subject' => $row['subject'],
                'marks_obtained' => $row['marks_obtained'],
                'total_marks' => $row['total_marks']
            ];
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Marksheet</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #e0f7fa;
            margin: 0;
            padding: 30px;
        }

        .container {
            width: 850px;
            margin: auto;
            background: white;
            border: 15px solid #007BFF;
            border-radius: 10px;
            box-shadow: 0 0 25px rgba(0,0,0,0.1);
            padding: 30px;
        }

        .school-header {
            text-align: center;
            padding: 10px 0;
            border-bottom: 2px solid #007BFF;
            margin-bottom: 30px;
        }

        .school-header h1 {
            font-size: 32px;
            margin: 0;
            color: #007BFF;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .form-box {
            text-align: center;
            margin-bottom: 30px;
        }

        select, button {
            padding: 10px 15px;
            font-size: 16px;
            border-radius: 6px;
            border: 1px solid #ccc;
            margin: 10px 5px;
        }

        button {
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }

        .marksheet h2 {
            text-align: center;
            color: #0066cc;
            border-bottom: 1px dashed #aaa;
            padding-bottom: 10px;
        }

        .info {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .info p {
            margin: 6px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 17px;
        }

        th {
            background: #007BFF;
            color: white;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        tr:nth-child(even) {
            background: #f1f1f1;
        }

        .print-btn {
            text-align: center;
            margin: 30px 0;
        }

        .print-btn button {
            background-color: #28a745;
            padding: 10px 25px;
            font-size: 16px;
        }

        .decorative-footer {
            text-align: center;
            margin-top: 40px;
            font-style: italic;
            font-size: 16px;
            background: linear-gradient(to right, #007BFF, #00c6ff);
            color: white;
            padding: 15px;
            border-radius: 0 0 10px 10px;
        }

        .footer-design {
            margin-top: 20px;
            height: 30px;
            background: repeating-linear-gradient(
              45deg,
              #007BFF,
              #007BFF 10px,
              #ffffff 10px,
              #ffffff 20px
            );
        }

        @media print {
            .form-box, .print-btn, .decorative-footer, .footer-design {
                display: none;
            }

            .container {
                border: none;
                box-shadow: none;
                padding: 10px;
            }
        }
    </style>
</head>
<body>

<div class="container">

    <!-- School Header -->
    <div class="school-header">
        <a href="add_marks.php"><h1>Ajay Satya Prakash Public School</h1></a>
    </div>

    <!-- Admission Dropdown -->
    <div class="form-box">
        <form method="POST">
            <label for="admission_no"><strong>Select Admission No:</strong></label>
            <select name="admission_no" required>
                <option value="">-- Select --</option>
                <?php while($row = $dropdown_result->fetch_assoc()): ?>
                    <option value="<?= $row['admission_no'] ?>" <?= $admission_no == $row['admission_no'] ? 'selected' : '' ?>>
                        <?= $row['admission_no'] ?>
                    </option>
                <?php endwhile; ?>
            </select>
            <button type="submit">Show Marksheet</button>
        </form>
    </div>

    <!-- Marksheet -->
    <div class="marksheet">
        <h2>Student Marksheet</h2>

        <?php if (!empty($student)): ?>
            <div class="info">
                <p><strong>Name:</strong> <?= $student['student_name'] ?></p>
                <p><strong>Admission No:</strong> <?= $student['admission_no'] ?></p>
                <p><strong>Class:</strong> <?= $student['class'] ?> - <?= $student['section'] ?></p>
            </div>

            <table>
                <tr>
                    <th>Subject</th>
                    <th>Marks Obtained</th>
                    <th>Total Marks</th>
                </tr>
                <?php 
                    $total = 0; 
                    $obtained = 0;
                    foreach ($subjects as $subject): 
                        $total += $subject['total_marks'];
                        $obtained += $subject['marks_obtained'];
                ?>
                <tr>
                    <td><?= $subject['subject'] ?></td>
                    <td><?= $subject['marks_obtained'] ?></td>
                    <td><?= $subject['total_marks'] ?></td>
                </tr>
                <?php endforeach; ?>
                <tr>
                    <th>Total</th>
                    <th><?= $obtained ?></th>
                    <th><?= $total ?></th>
                </tr>
                <tr>
                    <th colspan="2">Percentage</th>
                    <td><?= round(($obtained / $total) * 100, 2) ?>%</td>
                </tr>
            </table>
        <?php elseif ($admission_no): ?>
            <p>No record found for <strong><?= htmlspecialchars($admission_no) ?></strong></p>
        <?php else: ?>
            <p>Please select an Admission Number to view the marksheet.</p>
        <?php endif; ?>
    </div>

    <div class="print-btn">
        <button onclick="window.print()">🖨️ Print Marksheet</button>
    </div>

    <!-- Decorative Footer -->
    <div class="decorative-footer">
        "Knowledge is power – Empowering students for a brighter tomorrow."
    </div>
    <div class="footer-design"></div>

</div>

</body>
</html>
