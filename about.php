<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About HOPE</title>

    <link rel="stylesheet" href="./Styles/about.css">
    <link rel="stylesheet" href="./Bootstrap/bootstrap.min.css">
</head>

<body>

    <?php include_once 'navbar.php'; ?>

    <!-- ABOUT HEADER -->
    <!-- ABOUT HEADER -->
<div class="container mt-5 fade-in">
    <div class="row align-items-center">

        <div class="col-md-6 mb-4">
            <h2 class="heading">About HOPE</h2>
            <p class="para" style="text-align:justify;">
                HOPE is a platform built to connect passionate volunteers with old age homes that need emotional 
                support, companionship, and active involvement for their residents. Through HOPE, volunteers easily 
                discover opportunities to visit, assist, and engage with senior citizens across multiple care homes.
            </p>
        </div>

        <!-- CAROUSEL (RIGHT SIDE) -->
        <div class="col-md-6">
            <div id="aboutCarousel" class="carousel slide shadow rounded" data-bs-ride="carousel">

                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img src="./Assets/abpic1.jpg" class="d-block w-100 rounded carousel-img">
                    </div>

                    <div class="carousel-item">
                        <img src="./Assets/abpic2.jpg" class="d-block w-100 rounded carousel-img">
                    </div>

                    <div class="carousel-item">
                        <img src="./Assets/abpic4.jpg" class="d-block w-100 rounded carousel-img">
                    </div>

                </div>

                <!-- SLIDER BUTTONS -->
                <button class="carousel-control-prev" type="button" data-bs-target="#aboutCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#aboutCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>

            </div>
        </div>
    </div>
</div>


    <!-- MISSION & VISION -->
    <div class="container mt-5 fade-in">
        <h2 class="text-center heading">Our Mission & Vision</h2>
        <p class="text-center para mb-5">What drives our purpose and passion</p>

        <div class="row justify-content-center g-4">

            <!-- Mission Left -->
            <div class="col-md-5 fade-in-up">
                <div class="card p-3 shadow-sm h-100">
                    <img src="./Assets/mission.png" class="card-img-top mx-auto" style="width:80px; height:80px;">
                    <div class="card-body">
                        <h5 class="fw-bold text-uppercase text-center">Mission</h5>
                        <p class="vm-para" style="text-align:justify;">
                            Our mission is to connect dedicated volunteers with old age homes needing support and 
                            companionship. HOPE enables volunteers to make meaningful contributions through visits, 
                            activities, teaching, or emotional care — enriching the lives of senior citizens.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Vision Right -->
            <div class="col-md-5 fade-in-up">
                <div class="card p-3 shadow-sm h-100">
                    <img src="./Assets/vision.png" class="card-img-top mx-auto" style="width:80px; height:80px;">
                    <div class="card-body">
                        <h5 class="fw-bold text-uppercase text-center">Vision</h5>
                        <p class="vm-para" style="text-align:justify;">
                            Our vision is to build a connected world where elders receive continuous love, interaction, 
                            and care from society. HOPE aims to become India's leading volunteer-elder care network, 
                            promoting compassion and strong community participation.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- GALLERY SECTION -->
<div class="container mt-5 fade-in">
    <h2 class="text-center heading">Gallery</h2>
    <p class="text-center para mb-4">Moments of care, connection, and joy</p>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="card shadow gallery-card">
                <img src="./Assets/gallery1.jpeg" class="gallery-img card-img-top" alt="">
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow gallery-card">
                <img src="./Assets/gallery2.jpeg" class="gallery-img card-img-top" alt="">
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow gallery-card">
                <img src="./Assets/gallery3.jpeg" class="gallery-img card-img-top" alt="">
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow gallery-card">
                <img src="./Assets/gallery4.jpeg" class="gallery-img card-img-top" alt="">
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow gallery-card">
                <img src="./Assets/gallery5.jpeg" class="gallery-img card-img-top" alt="">
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow gallery-card">
                <img src="./Assets/gallery6.jpeg" class="gallery-img card-img-top" alt="">
            </div>
        </div>

    </div>
</div>


    <script src="./Bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>
