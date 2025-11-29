<?php
include_once 'navbar.php';
include_once "check.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    require_once "dbcon.php";
    $search_key = $_POST['search_key'];
    $search_key = "%" . $search_key . "%";
    $qry = "SELECT * FROM ashram WHERE name LIKE ? OR location LIKE ?";
    $stmt = $conn->prepare($qry);
    $stmt->bind_param("ss", $search_key, $search_key);
    $stmt->execute();
    $result = $stmt->get_result();

?>
    <div class="container">
        <div class="row">
            <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="col-md-3 mb-4 mt-4 d-flex align-items-stretch">
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
                            <a href="a_details.php?id=<?php echo $row["id"] ?>" class="btn btn-success">Details</a>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>

        </div>
    </div>
<?php
}
?>

<?php
include_once "footer.php";
?>