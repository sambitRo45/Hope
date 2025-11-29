<?php
include_once "navbar.php";
require_once "dbcon.php";

$qry = "SELECT * FROM user_temp ORDER BY user_id DESC";
$result = $conn->query($qry);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pending Ashram Requests</title>
    <link rel="stylesheet" href="Bootstrap/bootstrap.min.css">
    <style>

    </style>
</head>

<body style="background-color:#f0f7ee">
=======

<div class="container my-5">
 <h2 class="text-center mb-4">Pending User Requests</h2>
<table class="table table-bordered table-hover shadow">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Date</th>
        <th>Action</th>
      </tr>
    </thead>
 <tbody>
  <?php while($row = $result->fetch_assoc()) { ?>
    <tr>
       <td><?php echo $row['user_id']; ?></td>
       <td><?php echo $row['name']; ?></td>
       <td><?php echo $row['email']; ?></td>
       <td><?php echo $row['date']; ?></td>
       
       <td>
        <a href="approveU.php?id=<?php echo $row['user_id']; ?>" class="btn btn-success btn-sm">Approve</a>
        <a href="reject_user.php?id=<?php echo $row['user_id']; ?>" class="btn btn-danger btn-sm">Reject</a>
       </td>
    </tr>
 <?php } ?>
 </tbody>   
</table>
</div>
<?php
include_once "footer.php"
?>

