<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel="icon" type="image/png" href="../../public/package/logo.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../../public/css/infotempatwisata.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Open+Sans&family=Poppins:wght@300&family=Roboto&display=swap" rel="stylesheet">
    <!-- <script src="../../public/js/infowisataconf.js"></script> -->
    <title>Travelution</title>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="destination-picture">
        <img id="image" src="" alt="Destination Picture" class="destination-picture">
    </div>
    <div class="destination-info">
        <h1 id="placename"></h1>
        <h2 id="location"></h2>
        <h3>Informasi:</h3>
        <p id="price">Harga: Rp. </p>
        <p id="workhour">Waktu Operasional: </p>
        <p id="type">Kategori: </p>
        <h3>Deskripsi:</h3>
        <p id="description"></p>
        <h3>Kontak:</h3>
        <p id="contact">Telepon: </p>
        <p id="email">Email: </p>
        <p id="website">Website: </p>
    </div>
    <div class="button-menu">
        <button class="button custom-button" id="reservasi"><?php if (isset($_SESSION['Username'])) echo '<a href="select-travel-plan">'; else echo '<a href="login">'?>Reservasi</a></button>
        <!-- <button class="button custom-button" id="Review"><a href="reviewmenu.php">Review</a></button> -->
    </div>
    <script src="../../public/js/httprequest.js"></script>
    <script src="../../public/js/placeinfoo.js"></script> 
</body>
</html>