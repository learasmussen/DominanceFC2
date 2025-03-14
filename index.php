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

<!-- Top image -->
<div class="container-fluid p-0 m-0">
    <img src="images/front-page-header.jpg" alt="front-page-header-image" class="img-fluid">
</div>

<!-- Upcoming event card -->
<div class="container" id="event-card-negative-margin">
    <div class="row d-flex justify-content-center">
        <div class="col-12 ">
            <!-- Title section -->
            <div class="bg-dark-gray text-white p-3">
                <h2 class="font-overtext text-uppercase fw-bold text-orange mb-1 mt-2 mb-md-2 mb-lg-3 ms-lg-2 mt-lg-3" id="upcoming-events-header">Upcoming
                    Events</h2>
                <p class="font-overtext fw-bold fst-italic event-card-big-text mb-1 mb-md-2 mb-lg-3 ms-lg-2">DOMINANCE FC 03: MMA IN K.B. HALLEN,
                    COPENHAGEN</p>
                <p class="font-overtext fw-bold text-light-gray event-card-big-text mb-1 text-uppercase mb-md-2 mb-lg-3 ms-lg-2">26/04/2025 – K.B.
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
                        <p class="fw-bold event-card-text mb-1 mb-md-2 mb-lg-3 ms-lg-2 font-text">Secure your tickets and be part of the next
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

<!-- Watch live card-->
<div class="container-fluid bg-dark-gray mt-3 mb-3 d-md-none">
    <div class="row mb-3">
        <div class="col-12 text-orange fw-bold text-center font-overtext" id="watch-live-header">
            WATCH LIVE
        </div>
        <div class="col-12 text-white fw-bold text-center mb-lg-4 font-overtext" id="watch-live-underheader">
            AIRTOX DOMINANCE FIGHTING CHAMPIONSHIP 3.0
        </div>
    </div>

    <div class="row">
        <div class="col-6 pe-1 mb-3 pe-md-2 ps-lg-5 pe-lg-3 mb-lg-4">

            <img src="images/live-card-image.png" alt="livecardimage" class="col-12">

        </div>
        <div class="col-6 ps-1 ps-md-2 pe-lg-5 ps-lg-3">

            <div class="text-white live-card-text mb-1 mb-md-3 font-text">WATCH THE FIGHTERS LIVE HERE ON APRIL 26</div>
            <div class="text-white live-card-text mb-1 mb-md-3 font-text">OR BUY A TICKET FOR THE MAIN EVENT ON APRIL 26</div>
            <p class="text-light-gray mb-1 mb-md-2 mb-lg-4 font-text" id="live-card-pluto-tv">THE LIVE TV IS DELIVERD TO YOU BY PLUTO TV</p>

            <!-- Button Section -->
            <div class="col-md-4 text-md-end text-center d-flex align-items-center justify-content-start">
                <a href="#"
                   class="btn btn-orange rounded-0 text-uppercase text-white fw-bold px-2 py-1 m-0 px-md-4 py-md-3 px-lg-5 py-lg-4 font-overtext"
                   id="watch-live-text">WATCH LIVE</a>
            </div>

        </div>
    </div>
</div>

<!-- What is Dominance fc-->
<div class="container px-1 mt-md-3 mt-lg-5 d-none d-md-block">
    <div class="row mx-2">
        <div class="col-7 ps-0 pe-2">
            <div class="fw-bold font-overtext" id="what-is-dominance-fc-header">WHAT IS DOMINANCE FC?</div>
            <p class="what-is-dominance-fc-text font-text fw-bold">DFC, short for Dominance Fighting Championship, was established by three-time Olympian and UFC veteran Mark O. Madsen. Dominance FC’s vision is to establish Europe’s premier fight promotion, hosting multiple Dominance FC events annually. Dominance FC is dedicated to advancing the sport of MMA in Europe, creating exceptional experiences for fighters and fans alike.</p>
        </div>

        <div class="col-5 ps-0 pe-0">
            <img src="images/what-is-dominance-fc-image.jpg" alt="what-is-dominance-fc-image" class="col-12">
        </div>
    </div>
</div>

<!-- Mark O Madsen CEO plus " section-->
<div class="container px-2 px-md-3 mb-3 d-none d-md-block">
    <div class="row">
        <div class="col-3 pe-2 ps-3 ps-md-2 mt-lg-2 pe-lg-3">
            <img src="images/mark-o-madsen.jpg" alt="mark-o-madsen" class="col-12 rounded-5 ">
        </div>
        <div class="col-3 p-0 d-flex flex-column justify-content-center align-items-start">
            <p class="text-orange fw-bold mark-o-madsen-ceo mb-0 font-overtext">MARK O MADSEN</p>
            <p class="text-orange fw-bold mark-o-madsen-ceo mb-0 font-overtext">CEO OF DOMINANCE FC</p>
            <img src="images/mark-o-madsen-signature.png" alt="mark-o-madsen-signature" class="col-12 rounded-5">
        </div>
        <div class="col-1 text-light-gray p-0 text-center font-overtext" id="apostrophie">"</div>
        <div class="col-5 p-0 pe-3 ">
            <p class="what-is-dominance-fc-text mb-0 pt-1 font-text fw-bold">Dominance FC strives to build a fight promotion that attracts the best European fighters and delivers outstanding experiences for both spectators and sponsors. Our goal is to organize adrenaline-pumping MMA shows where fight fans experience events beyond the ordinary.</p>
        </div>
    </div>
</div>

<!-- Apply for our roster-->
<div class="container px-1 mb-3 mt-md-3 my-lg-5">
    <div class="row mx-2 ">
        <div class="col-7 ps-0 pe-2 pe-md-3">

            <img src="images/apply-for-our-roster-image.jpg" alt="apply-for-our-roster-image" class="col-12">

        </div>
        <div class="col-5 bg-dark-gray">

            <div class="text-orange fw-bold mt-2 font-overtext" id="apply-for-our-roster-header">APPLY FOR OUR FIGHTER ROSTER</div>
            <p class="apply-for-our-roster-text text-white mb-1 mb-md-2 font-text">We are always looking for new and exciting athletes to join our ranks at Dominance FC!</p>
            <p class="apply-for-our-roster-text text-white mb-2 mb-md-3 font-text">Do you have what it takes to perform at the top level, and compete with some of the best and most prominent fighters in the world?</p>

            <!-- Button Section -->
            <div class="col-md-4 text-md-end text-center d-flex align-items-center justify-content-start">
                <a href="#"
                   class="btn btn-orange rounded-0 text-uppercase text-white fw-bold px-2 py-1 m-0 mb-2 px-md-4 py-md-3 px-lg-5 py-lg-4 font-overtext"
                   id="sign-up-text">SIGN UP</a>
            </div>

        </div>
    </div>
</div>

<!-- Merch card-->
<div class="container px-1 mb-3 d-md-none">
    <div class="row mx-2 ">

        <div class="col-7 bg-dark-gray">

            <div class="text-orange fw-bold mt-2 font-overtext" id="merch-header">MERCH</div>
            <p class="merch-text text-white mb-2 font-text">View our new collection of MMA inspired merchandice such as T-Shirts</p>
            <p class="merch-text text-white mb-2 font-text">Furthermore we also offer MMA training equipment such as gloves and boxing pads</p>

            <!-- Button Section -->
            <div class="col-md-4 text-md-end text-center d-flex align-items-center justify-content-start">
                <a href="#"
                   class="font-overtext btn btn-orange rounded-0 text-uppercase text-white fw-bold px-2 py-1 m-0 mb-2 px-md-4 py-md-3 px-lg-5 py-lg-4"
                   id="view-our-merch-text">VIEW OUR MERCH</a>
            </div>

        </div>

        <div class="col-5 ps-2 pe-0 ">

            <img src="images/WHITE-TSHIRT-PNG.png" alt="white-t-shirt-image" class="col-12">

        </div>

    </div>
</div>

<?php include("include/footer.php") ?>

<script src="navbar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
