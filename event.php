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

<!-- Upcoming event card -->
<div class="container my-3">
    <div class="row d-flex justify-content-center">
        <div class="col-12 ">
            <!-- Title section -->
            <div class="bg-dark-gray text-white p-3">
                <h2 class="font-overtext text-uppercase fw-bold text-orange mb-1 mt-2 mb-md-2 mb-lg-3 ms-lg-2 mt-lg-3"
                    id="upcoming-events-header">Upcoming
                    Events</h2>
                <p class="font-overtext fw-bold fst-italic event-card-big-text mb-1 mb-md-2 mb-lg-3 ms-lg-2">DOMINANCE
                    FC 03: MMA IN K.B. HALLEN,
                    COPENHAGEN</p>
                <p class="font-overtext fw-bold text-light-gray event-card-big-text mb-1 text-uppercase mb-md-2 mb-lg-3 ms-lg-2">
                    26/04/2025 – K.B.
                    Hallen, Copenhagen</p>
                <div class="d-flex flex-row">

                    <!-- Text section -->
                    <div>
                        <p class="event-card-text mb-1 mb-md-2 mb-lg-3 ms-lg-2 font-text">
                            Expect fierce battles in the octagon, featuring both emerging local fighters and
                            international MMA stars.
                            DOMINANCE FC 3.0 promises to deliver high-stakes competition and a unique atmosphere
                            you won’t want to miss!
                        </p>
                        <p class="fw-bold event-card-text mb-1 mb-md-2 mb-lg-3 ms-lg-2 font-text">Secure your tickets
                            and be part of the next
                            chapter in European MMA history!</p>
                        <p class="text-white event-card-text ms-lg-2 mb-lg-3 font-text">Tickets are available now!</p>
                    </div>

                    <!-- Button Section -->
                    <div class="col-md-4 text-md-end text-center d-flex align-items-center justify-content-end ps-3 me-md-5">
                        <a href="#"
                           class="btn btn-orange rounded-0 text-uppercase text-white font-overtext fw-bold px-3 py-2 m-0 px-md-4 py-md-3 px-lg-5 py-lg-4"
                           id="buy-tickets-text">Buy Tickets</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Events April-February-->
<div class="container-fluid bg-dark-gray mb-3 mb-lg-5">
    <div class="row">
        <div class="col-12 text-white event-cards-information-text text-center my-3 my-lg-5 fw-bold px-4 px-lg-5 font-overtext">
            Expect fierce battles in the octagon, featuring both emerging local fighters and international MMA stars.
            DOMIINANCE FC promises to deliver high-stakes competition and a unique atmosphere you won’t want to miss! 
        </div>
        <div class="col-12 text-white event-cards-information-text text-center mb-3 mb-lg-5 fw-bold px-4 px-lg-5 font-overtext">
            Witness the rise of Europe's premier MMA promotion and be part of an unforgettable night of high-octane
            fights, featuring upcoming MMA talent ready to showcase their skills and dominate the cage. Secure Your Spot
            and Witness the Rise of DFC. Tickets are available Now!
        </div>
        <div class="col-12 mb-3">
            <img src="images/events-cards-with%20information.png" alt="event-cards-information" class="col-12">
        </div>
    </div>
</div>

<?php include("include/footer.php") ?>

<script src="navbar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>