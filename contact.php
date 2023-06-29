<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zay Shop - Contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/logo.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

    <!-- Load map styles -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>

<?php
   include_once("menu.php");
   include_once("whatsapp.php");
?>


    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Contactanos</h1>
            <p>
                Tenemos nuestra oficina en Paseo de las parras #229.
            </p>
            <p>Valle verde 34284 Durango, Dgo.</p>
        </div>
        <div style="width: 50%; height: 15rem; border: 2px solid black; margin: auto; display: flex; border-radius: 25px;">
            <img src="assets/img/logo.png" class="" alt="">
            <p>Agenda una cita</p>
        </div>
    </div>

    <!-- Start Map -->
    
    <div style="width: 100%; height: 30rem; "><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1671.2817818102972!2d-104.65310322624302!3d23.992551531142244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869bb91215b1f84b%3A0xe97b75bff9681a20!2sRenova%20Interiorismo%20y%20paisajismo!5e0!3m2!1ses!2smx!4v1685638345911!5m2!1ses!2smx" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
    <!-- Ena Map -->

    <?php
   include_once("footer.php");
?>

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>