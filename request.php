<?php 
include_once 'navbar.php';
require_once "dbcon.php";

$email = $_SESSION['email'];

$approvedQry = "SELECT id FROM ashram WHERE email = ?";
$stmtApproved = $conn->prepare($approvedQry);
$stmtApproved->bind_param("s", $email);
$stmtApproved->execute();
$resApproved = $stmtApproved->get_result();

$pendingQry = "SELECT email FROM ashram_temp WHERE email = ?";
$stmtPending = $conn->prepare($pendingQry);
$stmtPending->bind_param("s", $email);
$stmtPending->execute();
$resPending = $stmtPending->get_result();

$aid = null;
if($resApproved->num_rows > 0){
    $aid = $resApproved->fetch_assoc()['id'];
}

if(isset($_POST['submit'])){
    if($aid === null && $resPending->num_rows > 0){
        echo "<script>alert('Your ashram is not listed, Waiting for admin approval!'); window.location.href='home.php';</script>";
        exit();
    }

    if($aid !== null){
        $message = $_POST['message'];

        $insertQry = "INSERT INTO request (aid, request) VALUES (?, ?)";
        $stmt = $conn->prepare($insertQry);
        $stmt->bind_param("ss", $aid, $message);

        if($stmt->execute()){
            echo "<script>alert('Request submitted successfully!'); window.location.href='home.php?id=$aid';</script>";
        } else {
            echo "<script>alert('Failed to submit request!');</script>";
        }
    }
}
?>


<style>
body {
    background-image: url('./Assets/bg-pic.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    margin: 0; 
}

.navbar {
    background-color:#ffffff !important; 
    height: 60px; 
}
.navbar .navbar-brand, 
.navbar .nav-link {
    color: #34495e !important; 
}
.navbar .nav-link:hover {
    color:  #27ae60!important; 
}
</style>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card shadow-lg p-4" style="max-width: 600px; width: 100%; border-radius: 15px;">
        <h2 class="text-center mb-4 fs-1" style="color:#5D737E; font-weight:600;">Write Your Request</h2>

        <form action="" method="post">
            <!-- Hidden field for Ashram ID -->
            <input type="hidden" name="aid" value="<?php echo $aid; ?>">

            <div class="mb-3">
                <textarea name="message" id="message" rows="6" class="form-control"
                placeholder="Type your message or request here..." required
                style="resize: none; border-radius:10px;"></textarea>
            </div>

            <div class="text-center">
                <button type="submit" name="submit" class="btn btn-success px-4 py-2 fw-bold" style="border-radius: 10px;">
                    Submit Request
                </button>
            </div>
        </form>
    </div>
</div>

<?php include_once 'footer.php'; ?>
