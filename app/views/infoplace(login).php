<?php
    session_start();
    $_SESSION['Role'] = "admin";
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
        <img src="../../public/package/purpletravel.jpg" alt="Destination Picture" class="destination-picture">
        <img src="../../public/package/purpletravel.jpg" alt="Destination Picture" class="destination-picture">
        <img src="../../public/package/purpletravel.jpg" alt="Destination Picture" class="destination-picture">
    </div>
    <div class="destination-info">
        <h1 id="infonamatempat">Tempat AAB</h1>
        <h2 id="infolokasitempat">Bandung, Indonesia</h2>
        <h3>Informasi:</h3>
        <p>Harga: Rp. 100.000</p>
        <p>Waktu Operasional: 08.00 - 17.00</p>
        <p>Rating: 9/10</p>
        <h3>Deskripsi:</h3>
        <p>Tempat A adalah tempat wisata yang berada di Bandung, Indonesia. Tempat ini memiliki pemandangan yang indah dan cocok untuk berlibur bersama keluarga.
           Tempat ini memiliki fasilitas yang lengkap, seperti toilet, mushola, dan tempat makan. Tempat ini juga memiliki fasilitas yang ramah untuk penyandang disabilitas.
           Beragam jenis makanan dan minuman juga tersedia di tempat ini. Tempat ini juga memiliki fasilitas yang ramah untuk penyandang disabilitas.
           Berdasarkan rating dari pengunjung, tempat ini memiliki rating 9/10. Tempat ini juga memiliki fasilitas yang ramah untuk penyandang disabilitas.
           Oleh karena itu, tempat ini sangat cocok untuk dikunjungi bersama keluarga.</p>
        <h3>Kontak:</h3>
        <p>Telepon: 08123456789</p>
    </div>
    <div class="button-menu">
        <button class="button custom-button" id="reservasi"><a href="select-travel-plan">Reservasi</a></button>
        <!-- <button class="button custom-button" id="Review"><a href="reviewmenu.php">Review</a></button> -->
    </div>    
</body>
</html>