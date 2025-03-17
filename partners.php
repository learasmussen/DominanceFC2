<?php
/**
 * @var db $db
 */

require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>AIRTOX DOMINANCE FC</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <link rel="icon" href="images/fav-icon.png" type="image/png">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/4e7ccd0dde.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php include("include/logo-navbar.php") ?>

<!-- Top image-->
<div class="container-fluid position-relative">
    <div class="row">
        <div class="col-12 p-0 position-relative">
            <!-- Text positioned on top-left -->
            <div class="top-image-text position-absolute font-overtext top-0 start-0 text-orange fw-bold p-3 p-md-4 p-lg-5">
                PARTNERS
            </div>
            <!-- Background Image -->
            <img src="images/partners-top-image.jpg" alt="partners-top-image" class="w-100">
        </div>
    </div>
</div>

<!-- Partners header-->
<div class="container">
    <h1 class="text-center mt-3 mt-md-5 text-orange font-overtext" id="dominance-fc-partners-header">DOMINANCE FC
        PARTNERS</h1>
    <p class="text-center my-2 text-black font-text fw-bold px-3" id="dominance-fc-partners-text">
        In addition to our sponsors, we work closely with several key partners who help us deliver unforgettable MMA
        events:
    </p>
</div>

<!-- Partners elements-->
<div class="container my-3 my-md-5">
    <div class="row justify-content-center">

        <div class="col-4 text-center">
            <img src="images/kbhallen.png" alt="KBHALLEN" class="img-fluid mb-3" style="max-width: 80%;">
            <p class="fw-bold font-text kbhallen-nordicmedia-text mb-0">Our primary venue, providing us with a fantastic
                historic arena to host unique MMA shows.</p>
        </div>

        <div class="col-4 text-center">
            <img src="images/EU.png" alt="EU" class="img-fluid" style="max-width: 80%;">
        </div>

        <div class="col-4 text-center">
            <img src="images/nordicmedia.png" alt="nordicmedia" class="img-fluid mb-3" style="max-width: 80%;">
            <p class="fw-bold font-text kbhallen-nordicmedia-text mb-0">Our full-service marketing agency dedicated to
                driving growth for Dominance FC through effective digital marketing on our website.</p>
        </div>

    </div>
</div>

<?php include("include/footer.php") ?>

<script src="navbar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
