<?php
include_once "navbar.php";
include_once "dbcon.php";
include_once "check.php";
$qry = "SELECT id, name, message, image, location FROM ashram ORDER BY id DESC";
$stmt = $conn->prepare($qry);
$stmt->execute();
$result = $stmt->get_result();
?>

<div class="container my-5">
    <h2 class="text-center mb-4 page-title">Available Requests For Services</h2>

    <marquee direction="left" scrollamount="4" class="marquee-text">
        🌿 Welcome to Ashram Service Helpdesk — Serving Humanity With Compassion 🌿
    </marquee>

    <div class="row mt-4">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
        ?>
                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card service-card">
                        
                        <?php if ($row["image"] != "") { ?>
                            <img src="uploads/<?php echo $row['image']; ?>" class="card-img-top service-img">
                        <?php } else { ?>
                            <img src="uploads/default.png" class="card-img-top service-img">
                        <?php } ?>

                        <div class="card-body">
                            <h5 class="service-title"><?php echo $row["name"]; ?></h5>
                            <p class="service-desc"><?php echo $row["location"]; ?></p>
                        </div>

                        <div class="p-3">
                            <a href="a_details.php?id=<?php echo $row["id"] ?>" class="btn request-btn">Details</a>
                        </div>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "<h5 class='text-center text-muted mt-4'>No messages found.</h5>";
        }
        ?>
    </div>
</div>

<style>
    .page-title {
        font-weight: 800;
        color: #1e606a9a;
        font-size: 32px;
        letter-spacing: 1px;
    }

    .marquee-text {
        font-size: 18px;
        font-weight: 600;
        color: #0f5132;
        background: #e9f8ef;
        padding: 8px 0;
        border-radius: 6px;
    }

    .service-card {
        border: none;
        border-radius: 14px;
        overflow: hidden;
        transition: 0.4s ease;
        box-shadow: 0 4px 15px rgba(0,0,0,0.15);
        background-color: #ffffff;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .service-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 30px rgba(0,0,0,0.25);
    }

    .service-img {
        height: 230px;
        width: 100%;
        object-fit: cover;
        border-bottom: 3px solid #218c74;
    }

    .service-title {
        font-size: 22px;
        font-weight: 700;
        color: #218c74;
        margin-bottom: 8px;
    }

    .service-desc {
        font-size: 15px;
        color: #444;
        line-height: 1.6;
    }

    .request-btn {
        background: #1f7f57;
        color: white;
        font-size: 14px;
        padding: 6px 12px;
        width: 100px; 
        text-align: center;
        border-radius: 6px;
        font-weight: 600;
        display: inline-block;
        transition: 0.3s ease;
    }

    .request-btn:hover {
        background: #145c3e;
        color: #fff;
    }
</style>

<?php
$stmt->close();
include_once "footer.php";
?>
