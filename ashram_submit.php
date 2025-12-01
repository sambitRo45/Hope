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

$check = $conn->prepare("SELECT email FROM ashram_temp WHERE email = ?");
$check->bind_param("s", $email);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
    echo "<script>alert('Email already exists!'); window.location='home.php';</script>";
    exit();
}

move_uploaded_file($tmp_name, "uploads/" . $image);

$stmt = $conn->prepare("INSERT INTO ashram_temp (name, location, pincode, image, message, email) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $name, $location, $pincode, $image, $message, $email);

if ($stmt->execute()) {
    echo "<script>alert('Ashram submitted! Waiting for admin approval.'); window.location='home.php';</script>";
} else {
    echo "<script>alert('Something went wrong.'); window.location='home.php';</script>";
}
?>
