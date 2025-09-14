<?php
// submit_enquiry.php
$conn = new mysqli("localhost", "root", "", "school_erp");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get all POST data safely
$student_name = $_POST['student_name'];
$dob = $_POST['dob'];
$class = $_POST['class'];
$caste = $_POST['caste'];
$gender = $_POST['gender'];
$father_name = $_POST['father_name'];
$mother_name = $_POST['mother_name'];
$father_occupation = $_POST['father_occupation'];
$mother_occupation = $_POST['mother_occupation'];
$primary_contact = $_POST['primary_contact'];
$alternate_contact = $_POST['alternate_contact'];
$previous_class = $_POST['previous_class'];
$previous_school = $_POST['previous_school'];
$address = $_POST['address'];
$locality = $_POST['locality'];
$city = $_POST['city'];
$state = $_POST['state'];
$pin_code = $_POST['pin_code'];
$agreed = isset($_POST['agree']) ? 'Yes' : 'No';

$sql = "INSERT INTO student_enquiries (
    student_name, dob, class, caste, gender, father_name, mother_name,
    father_occupation, mother_occupation, primary_contact, alternate_contact,
    previous_class, previous_school, address, locality, city, state, pin_code, agreed
) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param(
    "sssssssssssssssssss",
    $student_name, $dob, $class, $caste, $gender, $father_name, $mother_name,
    $father_occupation, $mother_occupation, $primary_contact, $alternate_contact,
    $previous_class, $previous_school, $address, $locality, $city, $state, $pin_code, $agreed
);

if ($stmt->execute()) {
    // Redirect to view_enquiries.php on success
    header("Location: view_enquiries.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
