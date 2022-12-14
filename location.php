<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#022866">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
    <script src="https://kit.fontawesome.com/2436301015.js" crossorigin="anonymous"></script>




</head>
<body>
<?php
include "templates/header.php";
include "templates/menu.php";
?>

    <div class="main container">
        <div class="main__left">
            <h1>Location</h1>

            <div class="directions">
                <p>McMullin Motor Storage is located approximately 6.5 miles from our main office in Hooe (Mcmullin
                    Motors,
                    Lakeside Garage, Hooe Road, Plymouth, PL9 9RG).</p>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10183.572766062167!2d-3.9816153!3d50.3498975!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x65144fc31635bfe2!2sMcMullin%20Motors%20Storage!5e0!3m2!1sen!2sru!4v1654772465629!5m2!1sen!2sru"
                            width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <h2>Directions:</h2>
                <p>For Satellite Navigation, please enter “Yealmbridge, Quarry” (if available) and the postcode, PL8 2EG
                    into your navigation device. Otherwise, please follow the directions below to reach the Mcmullin
                    Motor
                    Storage facility from our main office:-</p>

                <div class="location-main-text">
                    <div class="location-img-block">

                        <a href="img/19.jpg" class="img-item">
                            <div class="location-img-hover">Zoom in</div>
                            <img src="img/19.jpg" alt="alt">
                        </a>
                        <a href="img/21.jpg" class="img-item">
                            <div class="location-img-hover">Zoom in</div>
                            <img src="img/21.jpg" alt="alt">
                        </a>
                        <a href="img/23.jpg" class="img-item">
                            <div class="location-img-hover">Zoom in</div>
                            <img src="img/23.jpg" alt="alt">
                        </a>
                        <a href="img/24.jpg" class="img-item">
                            <div class="location-img-hover">Zoom in</div>
                            <img src="img/24.jpg" alt="alt">
                        </a>
                        <a href="img/25.jpg" class="img-item">
                            <div class="location-img-hover">Zoom in</div>
                            <img src="img/25.jpg" alt="alt">
                        </a>
                        <a href="img/17.jpg" class="img-item">
                            <div class="location-img-hover">Zoom in</div>
                            <img src="img/17.jpg" alt="alt">
                        </a>

                    </div>
                    <div class="location-text-block">
                        <ol>
                            <li class="direction_points">Starting at our main office (Mcmullin Motors) in Hooe, follow
                                Hooe
                                Road and Underlane to Furzehatt
                                Road
                                in Plymstock.
                            </li>
                            <ol type="a">
                                <li>Head west towards Hooe Road, 269ft</li>
                                <li>Turn Right onto Hooe Road</li>
                                <li>Go through two mini roundabouts, 0.7 miles</li>
                                <li>Continue onto Radford Park Road, 171ft</li>
                                <li>Turn right onto Underlane</li>
                            </ol>
                            <li class="direction_points">Reach the A379 to Devon.</li>
                            <ol type="a">
                                <li>Continue on to Furzehatt Road, 0.4 Miles</li>
                                <li>Continue onto Springfield Road, 0.6 Miles</li>
                                <li>At the roundabout, take the 3rd exit onto Elburton Road/A379</li>
                            </ol>
                            <li class="direction_points">Reaching the vehicle storage facility.</li>
                            <ol type="a">
                                <li>Stay on the A379 going through Brixton and Yealmpton</li>
                                <li>After approximately 4 miles, there will a sign for Yealmbridge.</li>
                                <li>The entrance to the vehicle storage compound is on the right hand side, just after
                                    the
                                    sign
                                    for Yealmbridge, just before the Tollhouse building.
                                </li>
                            </ol>
                        </ol>
                    </div>
                </div>

            </div>

        </div>
                <?php
        include "templates/sidebar.php"
        ?>
    </div>


<?php
include "templates/footer.php";
?>

<script src="js/menu.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
<script>
    $(".location-img-block").magnificPopup({
        delegate: "a",
        type: "image",
        gallery: {
            enabled: true
        }
    });
</script>
</body>
</html>
