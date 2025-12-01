<?php
include "dbcon.php";
include_once "check.php";

$id = $_GET['id'];

// get record from temporary table
$stmt = $conn->prepare("SELECT * FROM user_temp WHERE user_id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$data = $stmt->get_result()->fetch_assoc();

// insert into final ashram table
$insert = $conn->prepare("INSERT INTO user (name, email,date) VALUES (?, ?, ?)");
$insert->bind_param("sss", $data['name'],$data['email'], $data['date']);
$insert->execute();

// delete from temporary table
$delete = $conn->prepare("DELETE FROM user_temp WHERE user_id = ?");
$delete->bind_param("i", $id);
$delete->execute();

header("Location: admin_user.php");
exit;
?>
