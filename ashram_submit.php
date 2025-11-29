<?php
include "dbcon.php";
session_start();

$name = $_POST['name'];
$location = $_POST['location'];
$pincode = $_POST['pincode'];
$message = $_POST['message'];
$email = $_POST['email'];

$image = $_FILES['img']['name'];
$tmp_name = $_FILES['img']['tmp_name'];

move_uploaded_file($tmp_name, "uploads/" . $image);

$qry = "SELECT * FROM ashram WHERE name = ? AND location = ? AND pincode = ?";
$stmt = $conn->prepare($qry);
$stmt->bind_param("sss", $name, $location, $pincode);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<script>alert('This Ashram already exists!'); window.location='home.php';</script>";
} else {

    $stmt = $conn->prepare("INSERT INTO ashram (name, location, pincode, image, message, email) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $location, $pincode, $image, $message, $email);

    if ($stmt->execute()) {
        echo "<script>alert('Ashram details submitted successfully!'); window.location='home.php';</script>";
    } else {
        echo "<script>alert('Something went wrong. Please try again.'); window.location='home.php';</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
