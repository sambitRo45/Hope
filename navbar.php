<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HOPE Navbar</title>

    <link rel="stylesheet" href="./Bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
    <link rel="stylesheet" href="./Styles/navbar.css" />
    <link rel="stylesheet" href="./Styles/footer.css" />
    <link rel="stylesheet" href="./Styles/home.css" />
    <link rel="stylesheet" href="./Styles/about.css" />
    <link rel="stylesheet" href="./Styles/ashram_details.css" />
    
</head>

<body>

    <nav class="navbar navbar-expand-lg custom-nav shadow-sm">
        <div class="container-fluid">

            <a class="navbar-brand brand-logo" href="home.php">
                HOPE <span>💚</span>
            </a>

            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-links">
                    <li class="nav-item"><a class="nav-link" href="./home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="./about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="./events.php">Events</a></li>
                    <?php if (isset($_SESSION['id'])  && ($_SESSION['type'] == "volunteer"  || $_SESSION['type'] == "admin")) { ?>
                    <li class="nav-item"><a class="nav-link" href="./Ashram_available.php">Ashrams</a></li>
                <?php 
                }
                ?>

               </ul>

                <?php if (isset($_SESSION['id']) && $_SESSION['type'] == "volunteer") { ?>
                    <form class="search-box d-flex" role="search">
                        <input class="form-control search-input" type="search" placeholder="Search..." />
                        <button class="btn search-btn">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                <?php
                }
                ?>

                <?php if (isset($_SESSION['id'])) { ?>
                    <ul class="navbar-nav ms-3 mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Welcome <?php echo $_SESSION['name']; ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                <?php
                } else {
                ?>

                <ul class="navbar-nav ms-3 mb-2 mb-lg-0">
                    <li class="nav-item ms-2">
                        <a class="btn login-btn" href="login.php">SignUp / LogIn</a>
                    </li>
                </ul>

                <?php
                }
                ?>
                



                

            </div>
        </div>
    </nav>