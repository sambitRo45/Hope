<?php
$HOST = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DB_NAME = "hope";
$PORT = 3307;

$conn = new mysqli($HOST, $USERNAME, $PASSWORD, $DB_NAME, $PORT);
if($conn->connect_error){
    die("Error: ".$conn->connect_error);
}
//  else {
//     echo "Databse Connected";
// }
?>