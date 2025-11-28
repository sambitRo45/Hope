<?php
include_once "navbar.php";
if(!isset($_GET['id'])){
    header('location:Ashram_available.php');
}
require_once "dbcon.php";
$id = $_GET['id'];
$qry = "SELECT * FROM ashram WHERE id=?";
$stmt = $conn->prepare($qry);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
if($result->num_rows > 0) {
    $data = $result->fetch_assoc();
    ?>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <h2>Details About Ashram: </h2>
                <p><b>Id: </b><?php echo $data['id'] ?></p>
                <p><b>Name: </b><?php echo $data['name'] ?></p>
                <p><b>Location: </b><?php echo $data['location'] ?></p>
                <p><b>Pincode: </b><?php echo $data['pincode'] ?></p>
                <p><b>Message: </b><?php echo $data['Message'] ?></p>
                <p><b>Email: </b><?php echo $data['email'] ?></p>
                <br>
                <h2>Requirements</h2>
            </div>
            <div class="col-md-6">
                <img src="<?php ?>" alt="">
            </div>
        </div>
    </div>

    <?php
}
?>