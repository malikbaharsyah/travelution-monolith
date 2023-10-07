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
    <link rel="stylesheet" href="../../public/css/addplace.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Open+Sans&family=Poppins:wght@300&family=Roboto&display=swap" rel="stylesheet">
    <title>Travelution</title>
</head>
<body>
    <?php include 'navbar.php'; ?>  
    <div class="adddestination">
        <h1>Add New Destination Menu</h1>
        <div class="uploadinfo">
            <h2>Upload Foto:</h2>
            <input type="file" name="upload" id="upload">
            <label for="upload" id="uploadbutton">Upload</label>
        </div>
        <div class="placeinfo1">
            <h2>Nama Tempat:</h2>
            <input type="text" name="placename" id="placename" placeholder="Nama Tempat">
            <h2>Lokasi:</h2>
            <input type="text" name="location" id="location" placeholder="Lokasi">
        </div>
        <div class="placeinfo2">
            <h2>Harga:</h2>
            <input type="text" name="price" id="price">
            <h2>Tipe:</h2>
            <input type="text" name="type" id="type">
            <h2>Jam Buka:</h2>
            <input type="time" name="openhour" id="openhour">
            <h2>Jam Tutup:</h2>
            <input type="time" name="closehour" id="closehour">
        </div>
        <div class="placeinfo3">
            <h2>Nomor Telepon:</h2>
            <input type="text" name="contact" id="contact">
            <h2>Email:</h2>
            <input type="text" name="email" id="email">
            <h2>Website:</h2>
            <input type="text" name="website" id="website">
        </div>
        <div class="placeinfo4">
            <h2>Deskripsi:</h2>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" name="submit" id="submit"><a href="pilih-wisata">Submit</a></button>
    </div>
    <script src="../../public/js/addtempatwisata.js"></script>
</body>
</html>