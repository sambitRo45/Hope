<?php include_once 'navbar.php'; ?>

<!-- HERO SECTION -->
<div class="container mt-5">
    <div class="row align-items-center">

        <!-- LEFT TEXT -->
        <div class="col-md-6 mb-4">
            <h2 class="heading">We Care with Love and Hope</h2>
            <p class="para text-justify">
                At HOPE, every day begins with warmth, dignity, and genuine care. Imagine walking into a place
                where the gentle laughter of elders fills the air, where stories of the past blend beautifully
                with the comfort of the present. Here, residents are not just cared for—they are celebrated.
                HOPE creates an environment where seniors feel safe, respected, and emotionally connected.
            </p>
            <?php if(isset($_SESSION['id']) && $_SESSION['type'] == "ashram") { ?>
                <a href="ashram_details.php" class="btn btn-success">Add Location</a>
                <a href="request.php" class="btn btn-success">Service Request</a>
            <?php
            }
            ?>
        </div>

        <!-- RIGHT IMAGE SLIDER -->
        <div class="col-md-6">
            <div id="hopeCarousel" class="carousel slide shadow-lg rounded" data-bs-ride="carousel">

                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#hopeCarousel" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#hopeCarousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#hopeCarousel" data-bs-slide-to="2"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./Assets/pic1.jpg" class="d-block w-100 rounded" style="height:350px;object-fit:cover;">
                    </div>
                    <div class="carousel-item">
                        <img src="./Assets/pic2.jpg" class="d-block w-100 rounded" style="height:350px;object-fit:cover;">
                    </div>
                    <div class="carousel-item">
                        <img src="./Assets/pic3.jpg" class="d-block w-100 rounded" style="height:350px;object-fit:cover;">
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#hopeCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#hopeCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>

            </div>
        </div>
    </div>
</div>

<!-- VISION & MISSION CARDS -->
<div class="container-fluid text-center mt-5">
    <div class="row g-5 justify-content-center">

        <!-- VISION CARD -->
        <div class="col-md-4 mb-5 px-4">
            <div class="card shadow-lg border-0 rounded-4 p-3">
                <img src="./Assets/vision.png" class="card-img-top mx-auto d-block"
                    style="width:60px; height:60px;">
                <div class="card-body">
                    <h5 class="fw-bold text-uppercase">Vision</h5>
                    <p class="text-justify">
                        The vision of HOPE is to create a compassionate world where every elderly person receives care, connection, and emotional support, no matter where they live. We imagine a society where volunteers and old age homes work together to bridge the gap between generations. HOPE aims to become a leading platform that unites kind-hearted individuals with elders who need them, building a future where empathy, respect, care, kindness, and supportive interactions guide relationships between people of all ages.
                    </p>
                </div>
            </div>
        </div>

        <!-- MISSION CARD -->
        <div class="col-md-4 mb-5 px-4">
            <div class="card shadow-lg border-0 rounded-4 p-3">
                <img src="./Assets/mission.png" class="card-img-top mx-auto d-block"
                    style="width:60px; height:60px;">
                <div class="card-body">
                    <h5 class="fw-bold text-uppercase">Mission</h5>
                    <p class="text-justify">
                       The mission of HOPE is to connect dedicated volunteers with old age homes that require companionship, assistance, and emotional support for their residents. Our platform makes it easy for volunteers to discover opportunities, participate in meaningful activities, and bring joy to senior citizens. We strive to empower old age homes by providing reliable access to a strong volunteer network, ensuring that no elder feels forgotten or alone while promoting dignity, compassion, kindness, respect, and meaningful community engagement.
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>
<?php
include_once "footer.php";
?>