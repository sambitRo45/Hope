<?php
include_once "navbar.php";
require_once "dbcon.php";

$id = $_GET['id']; 

if(!isset($id)){
    header('location:Ashram_available.php');
    exit;
}

// Fetch single Ashram by ID
$ashramQry = "SELECT * FROM ashram WHERE id=?";
$stmt = $conn->prepare($ashramQry);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows > 0) {
    $ashram = $result->fetch_assoc();
?>
<div class="container my-5">
    <div class="card shadow-lg p-4 border-0 rounded-4">
        <h2 class="text-center mb-4 w-100 fs-2" style="color:#5D737E"><?php echo $ashram['name']; ?> Details</h2>
        <div class="row align-items-center">
            <div class="col-md-6">
                <p><b>ID:</b> <?php echo $ashram['id'] ?></p>
                <p><b>Location:</b> <?php echo $ashram['location'] ?></p>
                <p><b>Pincode:</b> <?php echo $ashram['pincode'] ?></p>
                <p><b>Message:</b> <?php echo $ashram['Message'] ?></p>
                <p><b>Email:</b> <?php echo $ashram['email'] ?></p>
                
                <hr>
                <h5 class="text-success mb-3">Requests / Requirements</h5>

                <!-- Add Request Button -->
               

                <?php
                // Fetch requests for this Ashram
                $reqQry = "SELECT * FROM request WHERE aid=?";
                $reqStmt = $conn->prepare($reqQry);
                $reqStmt->bind_param("i", $ashram['id']);
                $reqStmt->execute();
                $reqResult = $reqStmt->get_result();

                if($reqResult->num_rows > 0){
                    echo "<ul class='list-group'>";
                    while($req = $reqResult->fetch_assoc()){
                        echo "<li class='list-group-item'>{$req['request']}</li>";
                      
                    }
                    echo "</ul>";
                } else {
                    echo '<p class="text-muted">No requests found for this Ashram.</p>';
                }
                ?>
            
                      <a href="request_approve.php" class="btn btn-success mt-5">
                       Yes
                      </a>
                      
            </div>

            <div class="col-md-6 text-center">
                <img src="uploads/<?php echo $ashram['image']; ?>" class="img-fluid rounded-4 shadow" 
                     style="max-height:350px; object-fit:cover; width:100%;" alt="Ashram Image">
            </div>
             
        </div>
    </div>
</div>

<?php
} else {
    echo "<p class='text-center mt-5 text-danger'>Ashram not found.</p>";
}

include_once "footer.php";
?>
