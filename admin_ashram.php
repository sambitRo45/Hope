<?php
include_once "navbar.php";
require_once "dbcon.php";
$qry = "SELECT * FROM ashram_temp ORDER BY temp_id DESC";
$result = $conn->query($qry);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pending Ashram Requests</title>
    <link rel="stylesheet" href="Bootstrap/bootstrap.min.css">
</head>

<body class="bg-light">
<div class="container my-5">

    <h2 class="text-center mb-4">Pending Ashram Requests</h2>

    <table class="table table-bordered table-hover shadow">
        <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Location</th>
            <th>Pincode</th>
            <th>Email</th>
            <th>Image</th>
            <th>Message</th>
            <th>Actions</th>
        </tr>
        </thead>

        <tbody>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?= $row['temp_id'] ?></td>
                <td><?= $row['name'] ?></td>
                <td><?= $row['location'] ?></td>
                <td><?= $row['pincode'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><img src="uploads/<?= $row['image'] ?>" width="80"></td>
                <td><?= $row['message'] ?></td>

                <td>
                    <a href="approve.php?id=<?= $row['temp_id'] ?>" class="btn btn-success btn-sm mb-1">YES</a>
                    <a href="delete_temp.php?id=<?= $row['temp_id'] ?>" 
                       onclick="return confirm('Delete this request?');" 
                       class="btn btn-danger btn-sm">DELETE</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>

    </table>
</div>
</body>
</html>
