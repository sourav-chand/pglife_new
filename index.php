<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | PG Life</title>

    <?php
    include "includes/head_links.php";
    ?>
    <link href="css/home.css" rel="stylesheet" />
    <style>
        #serach_input{
            background-color: white;
        }
    </style>
</head>

<body>
    <?php
    include "includes/header.php";
    ?>

    <div class="banner-container">
        <h2 class="white pb-3">Happiness per Square Foot</h2>

        <form id="search-form" action="property_list.php" method="GET">
            <div class="input-group city-search">
                <input id ="serach_input" type="text" class="form-control input-city" id='city' name='city' placeholder="Enter your city to search for PGs" />
                <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="page-container">
        <h1 class="city-heading">
               Local Colleges
        </h1>
        <div class="row">
            <div class="city-card-container col-md">
                <a href="property_list.php?city=Rahul_foundation">
                    <div class="city-card rounded-circle">
                        <img src="img/rahul.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=NSHM">
                    <div class="city-card rounded-circle">
                        <img src="img/nshm.jpg" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Bengal_college">
                    <div class="city-card rounded-circle">
                        <img src="img/bengal.jpg" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=BC_roy">
                    <div class="city-card rounded-circle">
                        <img src="img/BCroy.jpg" class="city-img" />
                    </div>
                </a>
            </div>

            <!-- <div class="city-card-container col-md">
                <a href="property_list.php?city=ABS">
                    <div class="city-card rounded-circle">
                        <img src="img/nshm.jpg" class="city-img" />
                    </div>
                </a>
            </div>
            <div class="city-card-container col-md">
                <a href="property_list.php?city=NSHM">
                    <div class="city-card rounded-circle">
                        <img src="img/nshm.jpg" class="city-img" />
                    </div>
                </a>
            </div>
            <div class="city-card-container col-md">
                <a href="property_list.php?city=NSHM">
                    <div class="city-card rounded-circle">
                        <img src="img/nshm.jpg" class="city-img" />
                    </div>
                </a>
            </div>
            <div class="city-card-container col-md">
                <a href="property_list.php?city=NSHM">
                    <div class="city-card rounded-circle">
                        <img src="img/nshm.jpg" class="city-img" />
                    </div>
                </a>
            </div> -->
        </div>
    </div>

    <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";
    ?>

</body>

</html>
