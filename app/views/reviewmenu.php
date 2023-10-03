<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel="icon" type="image/png" href="../../public/package/logo.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../../public/css/reviewmenu.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Open+Sans&family=Poppins:wght@300&family=Roboto&display=swap" rel="stylesheet">
    <title>Travelution</title>
</head>
<body>
    <div class="navbar">
        <ul>
            <li><a href="#">Jason</a>
                <ul class="profiledropdownadmin">
                    <li><a href="profileinformation.php">Profil</a></li>
                    <li><a href="selecteditdestination.php">Edit Destination</a></li>
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
    <div class="reviewplaces">
        <h1>Kasi Nilai Tempat A</h1>
        <div class="rateplaces">
            <h2>Rating: </h2>
            <select name="rate" id="rate">
                <option value="10">10</option>
                <option value="9">9</option> 
                <option value="8">8</option> 
                <option value="7">7</option> 
                <option value="6">6</option> 
                <option value="5">5</option> 
                <option value="4">4</option>
                <option value="3">3</option> 
                <option value="2">2</option> 
                <option value="1">1</option>
            </select>
            <h2>Upload Gambar/Video: </h2>
            <label for="upload" id="uploadbutton">Upload</label>
            <div class="komentar">
                <h2>Komentar: </h2>
                <textarea name="comment" id="comment" cols="30" rows="10"></textarea><br>
            </div>
            <button type="submit" name="submit" id="submit"><a href="#">Submit</a></button>
        </div>
    </div>  
    <div class="listreview">
        <h1>Lihat Review</h1>
        <h2>Sorted By:</h2>
        <select name="sort" id="sortcategory">
            <option value="terbaru">Terbaru</option>
            <option value="terlama">Terlama</option> 
            <option value="rating">Rating</option>
        </select>
        <h2>List Komentar:</h2>
        <div class="rateplaces-comment">
            <h3>Andrea</h3>
            <h4>Rating:</h4>
            <p>10/10</p>
            <h4>Komentar:</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.
            </p>
        </div>
        <div class="rateplaces-comment">
            <h3>Andrea</h3>
            <h4>Rating:</h4>
            <p>10/10</p>
            <h4>Komentar:</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
        </div>
        <div class="rateplaces-comment">
            <h3>Andrea</h3>
            <h4>Rating:</h4>
            <p>10/10</p>
            <h4>Komentar:</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
        </div>
        <div class="rateplaces-comment">
            <h3>Andrea</h3>
            <h4>Rating:</h4>
            <p>10/10</p>
            <h4>Komentar:</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
        </div>
    </div>
</body>
</html>