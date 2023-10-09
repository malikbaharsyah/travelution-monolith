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
    <link rel="stylesheet" href="../../public/css/editplace.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Open+Sans&family=Poppins:wght@300&family=Roboto&display=swap" rel="stylesheet">
    <title>Travelution</title>
</head>
<body>
    <?php include 'navbar.php'; ?>  
    <div class="adddestination">
        <h1 id="destination-name"></h1>
        <form action="edit-place" method="POST" enctype="multipart/form-data">
            <div class="deletebutton">
                <button type="submit" name="delete" id="delete"><a href="edit-place?page=1">Delete</a></button>
            </div>
            <div class="uploadinfo">
                <h2>Upload Foto:</h2>
                <input type="file" name="upload" id="upload">
                <label for="upload" id="uploadbutton">Upload</label>
            </div>
            <div class="placeinfo1">
                <h2>Nama Tempat:</h2>
                <input type="text" name="placename" id="placename" placeholder="">
                <h2>Lokasi:</h2>
                <input type="text" name="location" id="location" placeholder="">
            </div>
            <div class="placeinfo2">
                <h2>Harga:</h2>
                <input type="text" name="price" id="price" placeholder="">
                <h2>Tipe:</h2>
                <input type="text" name="type" id="type" placeholder="">
                <h2>Jam Buka:</h2>
                <input type="time" name="openhour" id="openhour" placeholder="">
                <h2>Jam Tutup:</h2>
                <input type="time" name="closehour" id="closehour" placeholder="">
            </div>
            <div class="placeinfo3">
                <h2>Nomor Telepon:</h2>
                <input type="text" name="contact" id="contact" placeholder="">
                <h2>Email:</h2>
                <input type="text" name="email" id="email" placeholder="">
                <h2>Website:</h2>
                <input type="text" name="website" id="website" placeholder="">
            </div>
            <div class="placeinfo4">
                <h2>Deskripsi:</h2>
                <textarea name="description" id="description" cols="30" rows="10" placeholder=""></textarea>
            </div>
            <button type="submit" name="submit" id="submit">Submit</button>
        </form>
    </div>
    <script src="../../public/js/httprequest.js"></script>
    <script src="../../public/js/editplaceinfoo.js"></script>
</body>
</html>