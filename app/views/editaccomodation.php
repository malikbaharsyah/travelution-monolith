<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel="icon" type="image/png" href="../../public/package/logo.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../../public/css/editplace.css">
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
                    <li><a href="piliheditakomodasi.php">Edit Accomodation</a></li>
                    <li><a id="logout">Logout</a></li>
                    <script src="../../public/js/logout.js"></script>
                </ul>
            </li>
            <li><a href="#">Menu</a>
                <ul class="menudropdown">
                    <li><a href="listtempatwisata(login).php">Tempat Wisata</a></li>
                    <li><a href="listakomodasi(login).php">Akomodasi</a></li>
                </ul>
            </li>
            <li><a href="createtravelplan.php">TravelPlan</a></li>
            <li><a href="dashboard.php">Home</a></li>
            <li><img src="../../public/package/logo2.png" alt="Travelution Logo"></li>
        </ul>
    </div>
    <div class="adddestination">
        <h1>Edit Accomodation Menu</h1>
        <div class="deletebutton">
            <button type="submit" name="delete" id="delete"><a href="piliheditwisata.php">Delete</a></button>
        </div>
        <div class="uploadinfo">
            <h2>Upload Foto:</h2>
            <input type="file" name="upload" id="upload">
            <label for="upload" id="uploadbutton">Upload</label>
        </div>
        <div class="verticalline"></div>
        <div class="placeinfo1">
            <h2>Nama Tempat:</h2>
            <input type="text" name="placename" id="placename" placeholder="Nama Tempat">
            <h2>Lokasi:</h2>
            <input type="text" name="location" id="location" placeholder="Lokasi">
        </div>
        <div class="placeinfo2">
            <h2>Harga:</h2>
            <input type="text" name="price" id="price">
            <h2>Kontak:</h2>
            <input type="text" name="contact" id="contact">
            <h2>Jam Buka:</h2>
            <input type="time" name="openhour" id="openhour">
            <h2>Jam Tutup:</h2>
            <input type="time" name="closehour" id="closehour">
            <h2>Deskripsi:</h2>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" name="submit" id="submit">Submit</button>
    </div>
    <script src="../../public/js/editinfoakomodasi.js"></script>
</body>
</html>