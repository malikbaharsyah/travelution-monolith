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
    <div class="navbar">
        <ul>
            <li><a href="#">Jason</a>
                <ul class="profiledropdownadmin">
                    <li><a href="profile">Profil</a></li>
                    <li><a href="pilih-wisata">Edit Destination</a></li>
                    <li><a href="pilih-akomodasi">Edit Accomodation</a></li>
                    <li><a id="logout">Logout</a></li>
                    <script src="../../public/js/logout.js"></script>
                </ul>
            </li>
            <li><a href="#">Menu</a>
                <ul class="menudropdown">
                    <li><a href="list-tempat-wisata-l">Tempat Wisata</a></li>
                    <li><a href="list-akomodasi-l">Akomodasi</a></li>
                </ul>
            </li>
            <li><a href="create-travel-plan">TravelPlan</a></li>
            <li><a href="dashboard">Home</a></li>
            <li><img src="../../public/package/logo2.png" alt="Travelution Logo"></li>
        </ul>
    </div>
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
                    <option value="Banyak Komentar">Banyak Komentar</option>
                    <option value="Huruf A-Z">Huruf A-Z</option>
                </select>
            </div>
            <div class="filter1">
                <h1>Filter Tipe:</h1>
                <select name="filtertempat" id="filtertempat">
                    <option value="Semua">Semua</option>
                    <option value="Hotel">Hotel</option>
                    <option value="Villa">Villa</option>
                    <option value="Resort">Resort</option>
                    <option value="Apartemen">Apartemen</option>
                    <option value="Homestay">Homestay</option>
                    <option value="Guest House">Guest House</option>
                    <option value="Bungalow">Bungalow</option>
                    <option value="Cottage">Cottage</option>
                </select>
            </div>
            <div class="filter2">
                <h1>Filter Daerah:</h1>
                <select name="filterdaerah" id="filterdaerah">
                    <option value="Semua">Semua</option>
                    <option value="Bali">Bali</option>
                    <option value="Banten">Banten</option>
                    <option value="Jakarta">Jakarta</option>
                    <option value="Jawa Barat">Jawa Barat</option>
                    <option value="Jawa Tengah">Jawa Tengah</option>
                    <option value="Yogyakarta">Yogyakarta</option>
                    <option value="Jawa Timur">Jawa Timur</option>
                </select>
            </div>
        </div>
    </div>
    <div class="buttonkonfirmasi">
        <button type="submit" class="konfirmasi" id="buttonkonfirmasi"><a href="konfirmasi-travel-plan">Konfirmasi Pemesanan</a></button>
    </div>
    <div class="listdestination">
        <div class="destinationbox">
            <a href="info-place-l">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2 id="namatempat">Tempat AAA</h2>
            <h3 id="lokasitempat">Jawa Barat</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="info-place-l">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Tempat A</h2>
            <h3>Jawa Tengah</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="info-place-l">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Purple Travel</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="info-place-l">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Rail Haze</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="info-place-l">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Brows</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="info-place-l">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Umbrowk</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="info-place-l">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Purple Travel</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="info-place-l">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Purple Travel</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="info-place-l">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Purple Travel</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="info-place-l">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Purple Travel</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="info-place-l">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Purple Travel</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="info-place-l">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Purple Travel</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="info-place-l">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Purple Travel</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="info-place-l">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Purple Travel</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="info-place-l">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Purple Travel</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="info-place-l">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Purple Travel</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="info-place-l">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Purple Stravel</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="info-place-l">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Purple Travel</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
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