<?php
include "dbcon.php";  

$name = $_POST['name'];
$location = $_POST['location'];
$pincode = $_POST['pincode'];
$message = $_POST['message'];

$image = $_FILES['img']['name'];
$tmp_name = $_FILES['img']['tmp_name'];

move_uploaded_file($tmp_name, "uploads/" . $image);

$stmt = $conn->prepare("INSERT INTO ashram (name, location, pincode, image, Message) VALUES (?, ?, ?, ?, ?)");

$stmt->bind_param("sssss", $name, $location, $pincode, $image, $message);

if ($stmt->execute()) {
    echo "Submitted Successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
