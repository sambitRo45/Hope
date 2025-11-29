<?php
include "dbcon.php";

$id = $_GET['id'];

$stmt = $conn->prepare("DELETE FROM user_temp WHERE user_id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: admin_user.php");
exit;
?>
