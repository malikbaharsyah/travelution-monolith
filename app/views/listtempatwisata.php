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
    <link rel="stylesheet" href="../../public/css/listplace.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Open+Sans&family=Poppins:wght@300&family=Roboto&display=swap" rel="stylesheet">
    <!-- <script src="../../public/js/infowisataconf.js"></script> -->
    <title>Travelution</title>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="searchandsorted">
        <h1>Cari Akomodasi:</h1>
        <div class="search">
            <input type="text" placeholder="Search" id="search" name="search">
            <!-- <label for="search">Search</label> -->
        </div>
        <div class="sortfill">
            <div class="sorted">
                <h1>Urutkan:</h1>
                <select name="sorted" id="sorted">
                    <option value="Termurah">Termurah</option>
                    <option value="Termahal">Termahal</option>
                    <option value="Rating Tertinggi">Rating Tertinggi</option>
                    <option value="Huruf A-Z">Huruf A-Z</option>
                </select>
            </div>
            <div class="filter1">
                <h1>Filter Tipe:</h1>
                <div class="filter-type">
                    <button id="toggle-dropdown1" class="dropdown-button" onclick="getCategory(event)">Pilih Tipe Tempat</button>
                    <div class="dropdown-select" id="type-dropdown">
                        <script src="../../public/js/getCategory.js"></script> 
                    </div>
                </div>
                <script src="../../public/js/placeselection.js"></script>
            </div>
            <div class="filter2">
                <h1>Filter Daerah:</h1>
                <div class="filter-place">
                    <button id="toggle-dropdown2" class="dropdown-button" onclick="getLocation(event)">Pilih Daerah</button>
                    <div class="dropdown-select" id="location-dropdown">
                        <script src="../../public/js/getLocation.js"></script>
                    </div>
                </div>
                <script src="../../public/js/placeselection.js"></script>
            </div>
            <button type="submit" class="buttonfilter" id="buttonfilter" >Apply Filter</button>
            <script src="../../public/js/httprequest.js"></script>
            <script src="../../public/js/placeselection.js"></script>
        </div>
    </div>
    <div class="buttonkonfirmasi">
        <button type="submit" class="konfirmasi" id="buttonkonfirmasi"><?php if (isset($_SESSION['Username'])) echo '<a href="konfirmasi-travel-plan">'; else echo '<a href="login">'?>Konfirmasi Pemesanan</a></button>
    </div>
    <div class="listdestination" id="destinationContainer">
        
    </div>
    <script src="../../public/js/placeselection.js"></script>
    <div class="pagination-page">
        <ul id="pagination-list">
            <a href="#">&laquo;</a>
        </ul>
    </div>    
    <script src="../../public/js/pagination.js"></script>
</body>
</html>