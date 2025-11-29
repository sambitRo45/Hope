<?php
//  session_start();
 include_once "navbar.php";
 require_once "dbcon.php";

// Check if user is logged in
if (!isset($_SESSION['id'], $_SESSION['name'], $_SESSION['email'])) {
    echo "<script>
            alert('Please login first.');
            window.location.href='login.php';
          </script>";
    exit;
}

$user_id = $_SESSION['id'];
$user_name = $_SESSION['name'];
$user_email = $_SESSION['email'];

// Check if request already exists
$check = "SELECT * FROM user_temp WHERE user_id=?";
$stmtCheck = $conn->prepare($check);
$stmtCheck->bind_param("i", $user_id);
$stmtCheck->execute();
$result = $stmtCheck->get_result();

if ($result->num_rows > 0) {
    echo "<script>
            alert('Your request is already pending with admin.');
            window.location.href='Ashram_available.php';
          </script>";
    exit;
}

// Insert request into user_temp
$qry = "INSERT INTO user_temp (user_id, name, email) VALUES (?, ?, ?)";
$stmt = $conn->prepare($qry);
$stmt->bind_param("iss", $user_id, $user_name, $user_email);

if ($stmt->execute()) {
    echo "<script>
            alert('Request sent to admin for approval.');
            window.location.href='Ashram_available.php';
          </script>";
} else {
    echo "<script>
            alert('Error sending request.');
            window.location.href='Ashram_available.php';
          </script>";
}
?>
