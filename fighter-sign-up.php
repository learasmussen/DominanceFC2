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
            <div class="font-overtext top-image-text position-absolute top-0 start-0 text-orange fw-bold p-3 p-md-4 p-lg-5">
                FIGHTER SIGN UP
            </div>
            <!-- Background Image -->
            <img src="images/fighter-sign-up-top-image.jpeg" alt="fighter-sign-up-top-image" class="w-100">
        </div>
    </div>
</div>

<!-- Apply for our fighter roster-->
<div class="container px-1 my-3 my-lg-5 my-md-4">
    <div class="row mx-2">

        <div class="col-6 ps-0 pe-2">
            <img src="images/fighter-sign-up-apply-image.jpeg" alt="fighter-sign-up-apply-image" class="col-12">
        </div>

        <div class="col-6 ps-0 pe-2 ps-md-2">
            <div class="font-overtext fw-bold text-orange mb-1 mb-lg-0" id="apply-for-our-fighter-roster-header">APPLY
                FOR OUR FIGHTER ROSTER
            </div>
            <p class="font-text apply-for-our-fighter-roster-text mb-1 mb-lg-3 fw-bold">We are always on the lookout for
                talented, driven, and exciting athletes to join our ranks at Dominance FC! Whether you're an
                up-and-coming prospect or a seasoned competitor, we are committed to finding the best fighters who are
                ready to push their limits and make their mark in the world of combat sports.</p>
            <p class="font-text apply-for-our-fighter-roster-text mb-1 mb-lg-3 fw-bold">Do you have what it takes to
                compete at the highest level? Are you prepared to step into the cage and go toe-to-toe with some of the
                most skilled and prominent fighters on the planet? If you have the passion, dedication, and skill to
                dominate the competition, we want to hear from you! </p>
            <p class="font-text apply-for-our-fighter-roster-text mb-1 mb-lg-3 fw-bold">This is your opportunity to
                showcase your talent and prove that you belong among the elite. </p>
            <p class="font-text apply-for-our-fighter-roster-text mb-0 fw-bolder">Join us at Dominance FC and take your
                career to the next level!</p>
        </div>

    </div>
</div>

<!-- Become a dominance FC fighter-->
<div class="container-fluid bg-dark-gray mb-3 mb-lg-5">
    <div class="text-uppercase text-orange fw-bold pt-3 ps-lg-4 font-overtext"
         id="become-a-dominance-fc-fighter-header">Become a Dominance FC Fighter
    </div>
    <p class="text-light-gray col-md-7 ps-lg-4 font-text" id="become-a-dominance-fc-fighter-text">Fill out our contact
        form here, and we will get back to you! If you have any social media profiles, feel free to add them as
        well.</p>

    <form>
        <div class="row font-text fw-bold">
            <!-- Left Column -->
            <div class="col-6 pb-3 px-lg-5 pb-lg-5">
                <input type="text" aria-label="full name"
                       class="fighter-sign-up-input-fields ps-0 form-control mb-1 bg-dark-gray text-white border-2 border-bottom border-start-0 border-end-0 border-top-0 border-orange rounded-0"
                       id="full-name" placeholder="Full Name*" required>
                <input type="text" aria-label="select yout experience"
                       class="fighter-sign-up-input-fields ps-0 form-control mb-1 bg-dark-gray text-white border-2 border-bottom border-start-0 border-end-0 border-top-0 border-orange rounded-0"
                       id="experience" placeholder="Select Your Experience*">
                <input type="text" aria-label="date of birth"
                       class="fighter-sign-up-input-fields ps-0 form-control mb-1 bg-dark-gray text-white border-2 border-bottom border-start-0 border-end-0 border-top-0 border-orange rounded-0"
                       id="dob" placeholder="Date of birth*" required>
                <input type="email" aria-label="email"
                       class="fighter-sign-up-input-fields ps-0 form-control mb-1 bg-dark-gray text-white border-2 border-bottom border-start-0 border-end-0 border-top-0 border-orange rounded-0"
                       id="email" placeholder="Email*" required>
                <input type="tel" aria-label="phone number"
                       class="fighter-sign-up-input-fields ps-0 form-control mb-1 bg-dark-gray text-white border-2 border-bottom border-start-0 border-end-0 border-top-0 border-orange rounded-0"
                       id="phone" placeholder="Phone Number*" required>
                <input type="text" aria-label="nationality"
                       class="fighter-sign-up-input-fields ps-0 form-control mb-1 bg-dark-gray text-white border-2 border-bottom border-start-0 border-end-0 border-top-0 border-orange rounded-0"
                       id="nationality" placeholder="Nationality*" required>
                <input type="text" aria-label="weight class"
                       class="fighter-sign-up-input-fields ps-0 form-control mb-1 bg-dark-gray text-white border-2 border-bottom border-start-0 border-end-0 border-top-0 border-orange rounded-0"
                       id="weight-class" placeholder="Weight Class*" required>
                <input type="text" aria-label="fight record"
                       class="fighter-sign-up-input-fields ps-0 form-control mb-1 bg-dark-gray text-white border-2 border-bottom border-start-0 border-end-0 border-top-0 border-orange rounded-0"
                       id="fight-record" placeholder="Fight Record*" required>
            </div>

            <!-- Right Column -->
            <div class="col-6 pb-3 px-lg-5 pb-lg-5">
                <input type="text" aria-label="affiliated gym and coach"
                       class="fighter-sign-up-input-fields ps-0 form-control mb-1 bg-dark-gray text-white border-2 border-bottom border-start-0 border-end-0 border-top-0 border-orange rounded-0"
                       id="gym-coach" placeholder="Affiliated Gym and Coach">
                <input type="url" aria-label="youtube link"
                       class="fighter-sign-up-input-fields ps-0 form-control mb-1 bg-dark-gray text-white border-2 border-bottom border-start-0 border-end-0 border-top-0 border-orange rounded-0"
                       id="youtube-link" placeholder="YouTube Link">
                <div class="row">
                    <div class="col-6 pe-1 pe-lg-2">
                        <input type="url" aria-label="facebook link"
                               class="fighter-sign-up-input-fields ps-0 form-control mb-2 bg-dark-gray text-white border-2 border-bottom border-start-0 border-end-0 border-top-0 border-orange rounded-0"
                               id="facebook-link" placeholder="Facebook Link">
                    </div>
                    <div class="col-6 ps-1 ps-lg-2">
                        <input type="url" aria-label="instagram link"
                               class="fighter-sign-up-input-fields ps-0 form-control mb-2 bg-dark-gray text-white border-2 border-bottom border-start-0 border-end-0 border-top-0 border-orange rounded-0"
                               id="instagram-link" placeholder="Instagram Link">
                    </div>
                    <div class="col-6 pe-1 pe-lg-2">
                        <input type="url" aria-label="twitter link"
                               class="mb-1 fighter-sign-up-input-fields ps-0 form-control bg-dark-gray text-white border-2 border-bottom border-start-0 border-end-0 border-top-0 border-orange rounded-0"
                               id="twitter-link" placeholder="Twitter Link">
                    </div>
                    <div class="col-6 ps-1 ps-lg-2">
                        <input type="url" aria-label="linkedIn link"
                               class="mb-1 fighter-sign-up-input-fields ps-0 form-control bg-dark-gray text-white border-2 border-bottom border-start-0 border-end-0 border-top-0 border-orange rounded-0"
                               id="linkedin-link" placeholder="LinkedIn Link">
                    </div>
                </div>


                <p class="my-0 text-white my-lg-1" id="do-you-allow">Do you allow us to save your info for future events
                    and contact per our privacy policy, marketing, and tracking? You can withdraw at any time.</p>

                <!-- Radio Buttons -->
                <div class="form-check m-0 d-flex flex-column  py-0 px-0">
                    <p class="mb-0 mb-lg-1">
                        <i class="fa-regular fa-circle text-orange"></i>
                        <label class="form-check-label text-white yes-no-permission ps-2" for="yes-permission"> Yes, you
                            have my permission</label>
                    </p>
                    <p class="mb-0 mb-lg-1">
                        <i class="fa-regular fa-circle text-orange"></i>
                        <label class="form-check-label text-white yes-no-permission ps-2" for="no-permission">
                            No</label>
                    </p>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                        class="btn btn-orange rounded-0 text-uppercase text-white fw-bold w-100 px-2 py-1 mt-md-2 py-md-2 font-overtext"
                        id="submit-me-as-a-fighter-button">Submit Me as a Fighter
                </button>
            </div>
        </div>


    </form>
</div>


<?php include("include/footer.php") ?>

<script src="navbar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>