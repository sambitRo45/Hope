<?php
include "dbcon.php";

$id = $_GET['id'];

// get record from temporary table
$stmt = $conn->prepare("SELECT * FROM ashram_temp WHERE temp_id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$data = $stmt->get_result()->fetch_assoc();

// insert into final ashram table
$insert = $conn->prepare("INSERT INTO ashram (name, location, pincode, image, message, email) VALUES (?, ?, ?, ?, ?, ?)");
$insert->bind_param("ssssss", $data['name'], $data['location'], $data['pincode'], $data['image'], $data['message'], $data['email']);
$insert->execute();

// delete from temporary table
$delete = $conn->prepare("DELETE FROM ashram_temp WHERE temp_id = ?");
$delete->bind_param("i", $id);
$delete->execute();

header("Location: admin_ashram.php");
exit;
?>
