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
    <link rel="stylesheet" href="../../public/css/pilihedit.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Open+Sans&family=Poppins:wght@300&family=Roboto&display=swap" rel="stylesheet">
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
                    <button id="toggle-dropdown1" class="dropdown-button">Pilih Tipe Tempat</button>
                    <div class="dropdown-select" id="type-dropdown">
                        <label for="semua"><input type="checkbox" id="semua" value="semua">Semua</label>
                        <label for="pantai"><input type="checkbox" id="pantai" value="pantai">Pantai</label>
                        <label for="gunung"><input type="checkbox" id="gunung" value="gunung">Gunung</label>
                        <label for="perkemahan"><input type="checkbox" id="perkemahan" value="perkemahan">Perkemahan</label>
                        <label for="taman"><input type="checkbox" id="taman" value="taman">Taman</label>
                        <label for="museum"><input type="checkbox" id="museum" value="museum">Museum</label>
                        <label for="kuliner"><input type="checkbox" id="kuliner" value="kuliner">Kuliner</label>
                    </div>
                </div>
                <script>
                    const toggleButton1 = document.getElementById("toggle-dropdown1");
                    const dropdown1 = document.getElementById("type-dropdown");

                    toggleButton1.addEventListener("click", function () {
                        dropdown1.style.display = dropdown1.style.display === "block" ? "none" : "block";
                    });
                </script>
            </div>
            <div class="filter2">
                <h1>Filter Daerah:</h1>
                <div class="filter-place">
                    <button id="toggle-dropdown2" class="dropdown-button">Pilih Daerah</button>
                    <div class="dropdown-select" id="place-dropdown">
                        <label for="semua"><input type="checkbox" id="semua" value="semua">Semua</label>
                        <label for="Bali"><input type="checkbox" id="Bali" value="Bali">Bali</label>
                        <label for="Banten"><input type="checkbox" id="Banten" value="Banten">Banten</label>
                        <label for="Jakarta"><input type="checkbox" id="Jakarta" value="Jakarta">Jakarta</label>
                        <label for="Jawa Barat"><input type="checkbox" id="Jawa Barat" value="Jawa Barat">Jawa Barat</label>
                        <label for="Jawa Tengah"><input type="checkbox" id="Jawa Tengah" value="Jawa Tengah">Jawa Tengah</label>
                        <label for="Yogyakarta"><input type="checkbox" id="Yogyakarta" value="Yogyakarta">Yogyakarta</label>
                        <label for="Jawa Timur"><input type="checkbox" id="Jawa Timur" value="Jawa Timur">Jawa Timur</label>
                    </div>
                </div>
                <script>
                    const toggleButton2 = document.getElementById("toggle-dropdown2");
                    const dropdown2 = document.getElementById("place-dropdown");

                    toggleButton2.addEventListener("click", function () {
                        dropdown2.style.display = dropdown2.style.display === "block" ? "none" : "block";
                    });
                </script>
            </div>
            <button type="submit" class="buttonfilter" id="buttonfilter">Apply Filter</button>
        </div>
    </div>
    <div class="buttonkonfirmasi">
        <button type="submit" class="konfirmasi" id="buttonkonfirmasi"><a href="add-accomodation">Add New Accomodation</a></button>
    </div>
    <div class="listdestination" id="listdestination">
        <div class="destinationbox">
            <a href="edit-accomodation">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2><span id="namatempat"></span></h2>
            <h3><span id="lokasitempat"></span></h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="edit-accomodation">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Tempat AB</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="edit-accomodation">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Tempat AB</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="edit-accomodation">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Rail Haze</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="edit-accomodation">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Brows</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="edit-accomodation">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Umbrowk</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="edit-accomodation">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Purple Travel</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="edit-accomodation">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Purple Travel</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="edit-accomodation">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Purple Travel</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="edit-accomodation">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Purple Travel</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="edit-accomodation">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Purple Travel</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="edit-accomodation">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Purple Travel</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="edit-accomodation">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Purple Travel</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
    </div>
    <script src="../../public/js/placeselection.js"></script>
    <script src="../../public/js/editinfo.js"></script>
    <script src="../../public/js/addtempatwisata.js"></script>
    <div class="pagination-page">
        <ul id="pagination-list">
            <a href="#">&laquo;</a>
        </ul>
    </div>    
    <script src="../../public/js/pagination.js"></script>
</body>
</html>