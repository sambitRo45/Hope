<?php
require_once "dbcon.php";
session_start();

$name = $_POST['name'];
$location = $_POST['location'];
$pincode = $_POST['pincode'];
$message = $_POST['message'];
$email = $_POST['email'];

$image = $_FILES['img']['name'];
$tmp_name = $_FILES['img']['tmp_name'];

// upload file
move_uploaded_file($tmp_name, "uploads/" . $image);

// insert in temporary table
$stmt = $conn->prepare("INSERT INTO ashram_temp (name, location, pincode, image, message, email) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $name, $location, $pincode, $image, $message, $email);

if ($stmt->execute()) {
    echo "<script>alert('Ashram submitted! Waiting for admin approval.'); window.location='home.php';</script>";
} else {
    echo "<script>alert('Something went wrong.'); window.location='home.php';</script>";
}

?>
