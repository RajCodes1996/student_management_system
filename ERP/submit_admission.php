<?php
$host = "localhost";
$user = "root";         // Change if using another username
$password = "";         // Change if using a password
$database = "school_erp"; // Make sure the database is created

$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collecting form data
$fields = [
    'form_no', 'admission_no', 'student_name', 'gender', 'type', 'caste',
    'transport', 'pickup_stoppage', 'house', 'distance', 'student_class', 'nationality',
    'dob', 'doa', 'religion', 'siblings', 'height', 'weight', 'apar_id', 'pen', 'sssmid',
    'aadhar_no', 'account_no', 'ifsc_code', 'previous_school', 'reason_change', 'class_passed',
    'marks_obtained', 'father_name', 'mother_name', 'father_qualification', 'mother_qualification',
    'father_profession', 'mother_profession', 'father_email', 'mother_email', 'father_aadhar',
    'mother_aadhar', 'res_address_f', 'res_address_m', 'office_address_f', 'office_address_m',
    'mobile_father', 'mobile_mother', 'fee_concession', 'concession_amt', 'only_child', 'siblings_in_school'
];

$data = [];
foreach ($fields as $field) {
    $data[$field] = isset($_POST[$field]) ? $conn->real_escape_string($_POST[$field]) : '';
}

$sql = "INSERT INTO student_admissions (" . implode(',', $fields) . ") VALUES ('" . implode("','", $data) . "')";

if ($conn->query($sql) === TRUE) {
    echo "<h2 style='color: green; text-align:center;'>Admission submitted successfully!</h2>";
    echo "<p style='text-align:center;'><a href='view_admissions.php'>View All Admissions</a></p>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
