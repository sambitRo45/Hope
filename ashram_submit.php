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

$qry = "SELECT * FROM ashram where email = ? ";
$stmt = $conn->prepare($qry);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<script>alert('You have already registered.'); window.location='home.php';</script>";
} else {
    $stmt = $conn->prepare("INSERT INTO ashram (name, location, pincode, image, Message, email) VALUES (?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ssssss", $name, $location, $pincode, $image, $message, $email);

    if ($stmt->execute()) {
        header("location:home.php");
    } else {
?>
        <script>
            alert("You have already registered");
        </script>
<?php
    }

    $stmt->close();
    $conn->close();
}

?>