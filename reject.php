<?php
include "dbcon.php";
include_once "check.php";

$id = $_GET['id'];

$stmt = $conn->prepare("DELETE FROM ashram_temp WHERE temp_id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: admin_ashram.php");
exit;
?>
