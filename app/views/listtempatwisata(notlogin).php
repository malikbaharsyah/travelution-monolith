<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel="icon" type="image/png" href="../../public/package/logo.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../../public/css/listplace.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Open+Sans&family=Poppins:wght@300&family=Roboto&display=swap" rel="stylesheet">
    <title>Travelution</title>
</head>
<body>
    <div class="navbar">
        <ul>
            <li><a href="login">Login</a></li>
            <li><a href="signup">Sign Up</a></li>
            <li><a href="#">Menu</a>
                <ul class="menudropdown">
                    <li><a href="list-tempat-wisata-nl">Tempat Wisata</a></li>
                    <li><a href="list-akomodasi-nl">Akomodasi</a></li>
                </ul>
            </li>
            <li><a href="">Home</a></li>
            <li><img src="../../public/package/logo2.png" alt="Travelution Logo"></li>
        </ul>
    </div>
    <div class="searchandsorted">
        <h1>Cari Tempat:</h1>
        <div class="search">
            <input type="text" placeholder="Search" id="search" name="search">
        </div>
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
    </div>
    <div class="listdestination" id="destinationContainer">
        <!-- <div class="destinationbox">
            <a href="infotempatwisata(notlogin).php">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Tempat AB</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="infotempatwisata(notlogin).php">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Tempat A</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="infotempatwisata(notlogin).php">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Purple Travel</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="infotempatwisata(notlogin).php">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Rail Haze</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="infotempatwisata(notlogin).php">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Brows</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="infotempatwisata(notlogin).php">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Umbrowk</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="infotempatwisata(notlogin).php">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Purple Travel</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="infotempatwisata(notlogin).php">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Purple Travel</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="infotempatwisata(notlogin).php">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Purple Travel</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="infotempatwisata(notlogin).php">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Purple Travel</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="infotempatwisata(notlogin).php">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Purple Travel</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="infotempatwisata(notlogin).php">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Purple Travel</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="infotempatwisata(notlogin).php">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Purple Travel</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="infotempatwisata(notlogin).php">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Purple Travel</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="infotempatwisata(notlogin).php">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Purple Travel</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="infotempatwisata(notlogin).php">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Purple Travel</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="infotempatwisata(notlogin).php">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Purple Stravel</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div>
        <div class="destinationbox">
            <a href="infotempatwisata(notlogin).php">
            <img src="../../public/package/purpletravel.jpg" alt="destination1">
            <h2>Purple Travel</h2>
            <h3>Bogor, Indonesia</h3>
            </a>
        </div> -->
        <script src="../../public/js/loadwisata.js"></script>

    </div>
    <script src="../../public/js/listtempatwisata.js"></script>
    <div class="pagination-page">
        <ul id="pagination-list">
            <a href="#">&laquo;</a>
        </ul>
    </div>    
    <script src="../../public/js/pagination.js"></script>
</body>
</html>