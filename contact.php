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
            <div class="top-image-text position-absolute font-overtext top-0 start-0 text-orange fw-bold p-3 p-md-4 p-lg-5">
                CONTACT
            </div>
            <!-- Background Image -->
            <img src="images/contact-top-image.jpg" alt="contact-top-image" class="w-100">
        </div>
    </div>
</div>

<!-- Contact dominance fc-->
<div class="container-fluid bg-dark-gray my-3 my-lg-5">
    <div class="text-uppercase text-orange text-center fw-bold pt-3 pt-lg-5 ps-md-2 ps-lg-4 font-overtext"
         id="contact-dominance-fc-header">CONTACT DOMINANCE FC
    </div>
    <p class="text-light-gray ps-md-2 ps-lg-4 pe-md-4 font-text text-center" id="contact-dominance-fc-text">Ready to
        elevate your brand with Dominance FC? Contact us today to create a customized sponsorship package that meets
        your needs.</p>

    <form>
        <div class="row font-text fw-bold py-md-4 pb-lg-5">
            <!-- Left Column -->
            <div class="col-6 pb-3 ps-md-4 ps-lg-5 pe-lg-3">
                <img src="images/contact-dominance-fc-image.jpg" alt="contact-dominance-fc-image" class="col-12">
            </div>


            <!-- Right Column -->
            <div class="col-6 pb-3 pe-md-4 pe-lg-5 ps-lg-3 pb-lg-5">
                <input type="text" aria-label="full name"
                       class="contact-input-fields ps-0 pt-0 form-control mb-1 mb-md-3 mb-lg-5 bg-dark-gray text-white border-2 border-bottom border-start-0 border-end-0 border-top-0 border-orange rounded-0"
                       id="full-name" placeholder="Full Name*" required>
                <input type="text" aria-label="surname"
                       class="contact-input-fields ps-0 pt-0 form-control mb-1 mb-md-3 mb-lg-5 bg-dark-gray text-white border-2 border-bottom border-start-0 border-end-0 border-top-0 border-orange rounded-0"
                       id="surname" placeholder="Surname*" required>
                <input type="email" aria-label="email"
                       class="contact-input-fields ps-0 pt-0 form-control mb-1 mb-md-3 mb-lg-5 bg-dark-gray text-white border-2 border-bottom border-start-0 border-end-0 border-top-0 border-orange rounded-0"
                       id="email" placeholder="Email*" required>
                <input type="tel" aria-label="phone number"
                       class="contact-input-fields ps-0 pt-0 form-control mb-1 mb-md-3 mb-lg-5 bg-dark-gray text-white border-2 border-bottom border-start-0 border-end-0 border-top-0 border-orange rounded-0"
                       id="phone" placeholder="Phone Number*" required>
                <input type="text" aria-label="message"
                       class="contact-input-fields ps-0 pt-0 form-control mb-3 mb-md-5 bg-dark-gray text-white border-2 border-bottom border-start-0 border-end-0 border-top-0 border-orange rounded-0"
                       id="message" placeholder="Message" required>
                <!-- Submit Button -->
                <button type="submit"
                        class="btn btn-orange rounded-0 text-uppercase text-white fw-bold w-100 px-2 py-1 mt-md-2 py-md-2 font-overtext"
                        id="contact-dominance-fc-button">SUBMIT
                </button>
            </div>


        </div>
    </form>
</div>

<!-- Media and press contact-->
<div class="container-fluid my-3 mb-lg-5">
    <div class="text-uppercase text-orange fw-bold pt-3 pt-lg-5 ps-md-2 ps-lg-4 font-overtext text-center"
         id="contact-dominance-fc-header">MEDIA AND PRESS CONTACT
    </div>
    <p class="text-light-gray ps-md-2 ps-lg-4 pe-md-4 font-text text-center fw-bold" id="contact-dominance-fc-text">For
        all media and press-related inquiries, please contact our PR team. We look forward to assisting you with your
        questions, interview requests, and any other press-related matters.</p>

    <form>
        <div class="row font-text fw-bold py-md-4 pb-lg-5">
            <!-- Left Column -->
            <div class="col-6 pb-3 ps-md-4 ps-lg-5 pe-lg-3">
                <div class="contact-input-fields text-black fw-bold ps-0 pt-0 form-control mb-1 mb-md-3 mb-lg-5 border-2 border-bottom border-start-0 border-end-0 border-top-0 border-orange rounded-0">
                    Name*
                </div>
                <div class="contact-input-fields text-black fw-bold ps-0 pt-0 form-control mb-1 mb-md-3 mb-lg-5 border-2 border-bottom border-start-0 border-end-0 border-top-0 border-orange rounded-0">
                    Phone Number*
                </div>
                <div class="contact-input-fields text-black fw-bold ps-0 pt-0 form-control mb-1 mb-md-3 mb-lg-5 border-2 border-bottom border-start-0 border-end-0 border-top-0 border-orange rounded-0">
                    Company*
                </div>
            </div>


            <!-- Right Column -->
            <div class="col-6 pb-3 pe-md-4 pe-lg-5 ps-lg-3 pb-lg-5">

                <div class="contact-input-fields text-black fw-bold ps-0 pt-0 form-control mb-1 mb-md-3 mb-lg-5 border-2 border-bottom border-start-0 border-end-0 border-top-0 border-orange rounded-0">
                    Surname*
                </div>
                <div class="contact-input-fields text-black fw-bold ps-0 pt-0 form-control mb-1 mb-md-3 mb-lg-5 border-2 border-bottom border-start-0 border-end-0 border-top-0 border-orange rounded-0">
                    Email*
                </div>
                <div class="contact-input-fields text-black fw-bold ps-0 pt-0 form-control mb-1 mb-md-3 mb-lg-5 border-2 border-bottom border-start-0 border-end-0 border-top-0 border-orange rounded-0">
                    Message
                </div>

            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-8">
                    <button type="submit"
                            class="btn btn-orange rounded-0 text-uppercase text-white fw-bold w-100 px-2 py-1 mt-md-2 py-md-2 font-overtext"
                            id="contact-dominance-fc-button">SUBMIT
                    </button>
                </div>
            </div>

        </div>
    </form>
</div>

<?php include("include/footer.php") ?>

<script src="navbar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
