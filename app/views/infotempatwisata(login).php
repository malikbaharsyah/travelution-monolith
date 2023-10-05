<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel="icon" type="image/png" href="../../public/package/logo.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../../public/css/infotempatwisata.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Open+Sans&family=Poppins:wght@300&family=Roboto&display=swap" rel="stylesheet">
    <title>Travelution</title>
</head>
<body>
    <div class="navbar">
        <ul>
            <li><a href="#">Jason</a>
                <ul class="profiledropdownadmin">
                    <li><a href="profileinformation.php">Profil</a></li>
                    <li><a href="piliheditwisata.php">Edit Destination</a></li>
                    <!-- <li><a href="../html/adddestination.html">Edit Accomodation</a></li> -->
                    <li><a id="logout">Logout</a></li>
                    <script src="../../public/js/logout.js"></script>
                </ul>
            </li>
            <li><a href="#">Menu</a>
                <ul class="menudropdown">
                    <li><a href="listtempatwisata(login).php">Tempat Wisata</a></li>
                    <!-- <li><a href="#">Akomodasi</a></li> -->
                </ul>
            </li>
            <li><a href="dashboard.php">Home</a></li>
            <li><img src="../../public/package/logo2.png" alt="Travelution Logo"></li>
        </ul>
    </div>
    <div class="destination-picture">
        <img src="../../public/package/purpletravel.jpg" alt="Destination Picture" class="destination-picture">
        <img src="../../public/package/purpletravel.jpg" alt="Destination Picture" class="destination-picture">
        <img src="../../public/package/purpletravel.jpg" alt="Destination Picture" class="destination-picture">
    </div>
    <div class="destination-info">
        <h1>Tempat A</h1>
        <h2>Bandung, Indonesia</h2>
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
        <button class="button custom-button" id="Reservasi"><a href="reservationmenu.php">Reservasi</a></button>
        <button class="button custom-button" id="Review"><a href="reviewmenu.php">Review</a></button>
    </div>    
</body>
</html>