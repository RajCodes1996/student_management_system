<?php
$conn = new mysqli("localhost", "root", "", "school_erp");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$visitor_name = $_POST['visitor_name'];
$gender = $_POST['gender'];
$organization_name = $_POST['organization_name'];
$meeting_purpose = $_POST['meeting_purpose'];
$meet_with = $_POST['meet_with'];
$date = $_POST['date'];
$time = $_POST['time'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$city = $_POST['city'];

$sql = "INSERT INTO appointments (visitor_name, gender, organization_name, meeting_purpose, meet_with, date, time, mobile, address, city)
VALUES ('$visitor_name', '$gender', '$organization_name', '$meeting_purpose', '$meet_with', '$date', '$time', '$mobile', '$address', '$city')";

if ($conn->query($sql) === TRUE) {
    echo "Appointment booked successfully. <a href='view_appointments.php'>View Appointments</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
