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
            <div class="top-image-text position-absolute top-0 start-0 font-overtext text-orange fw-bold p-3 p-md-4 p-lg-5">
                LIVE TV
            </div>
            <!-- Background Image -->
            <img src="images/live-tv-top-image.jpg" alt="live-tv-top-image" class="w-100">
        </div>
    </div>
</div>

<!-- Watch live card-->
<div class="container-fluid bg-dark-gray mt-3 mb-3 my-lg-5">
    <div class="row mb-3 font-overtext">
        <div class="col-12 text-orange fw-bold text-center" id="watch-live-header">
            WATCH LIVE
        </div>
        <div class="col-12 text-white fw-bold text-center mb-lg-4" id="watch-live-underheader">
            AIRTOX DOMINANCE FIGHTING CHAMPIONSHIP 3.0
        </div>
    </div>

    <div class="row font-text">
        <div class="col-6 pe-1 mb-3 pe-md-2 ps-lg-5 pe-lg-3 mb-lg-4">

            <img src="images/live-card-image.png" alt="livecardimage" class="col-12">

        </div>
        <div class="col-6 ps-1 ps-md-2 pe-lg-5 ps-lg-3">

            <div class="text-white live-card-text mb-1 mb-md-3">WATCH THE FIGHTERS LIVE HERE ON APRIL 26</div>
            <div class="text-white live-card-text mb-1 mb-md-3">OR BUY A TICKET FOR THE MAIN EVENT ON APRIL 26</div>
            <p class="text-light-gray mb-1 mb-md-2 mb-lg-4" id="live-card-pluto-tv-gray-text">THE LIVE TV IS DELIVERD TO YOU BY PLUTO TV</p>

            <!-- Button Section -->
            <div class="col-md-4 text-md-end text-center d-flex align-items-center justify-content-start">
                <a href="#"
                   class="font-overtext btn btn-orange rounded-0 text-uppercase text-white fw-bold px-2 py-1 m-0 px-md-4 py-md-3 px-lg-5 py-lg-4"
                   id="watch-live-text">WATCH LIVE</a>
            </div>

        </div>
    </div>
</div>

<?php include("include/footer.php") ?>

<script src="navbar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

