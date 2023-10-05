<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel="icon" type="image/png" href="../../public/package/logo.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../../public/css/konfirmasipesanan.css">
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
    <div class="konfirmasipemesanan">
        <h1>Konfirmasi Pemesanan</h1>
        <div class="listpemesanan">
            <div class="pesanan-per-hari">
                <h2>Kamis, 4 Oktober 2023</h2>
                <table>
                    <tr>
                        <th>Kebutuhan</th>
                        <th>Waktu Awal</th>
                        <th>Waktu Awal</th>
                        <th>Jumlah</th>
                        <th>Harga Satuan</th>
                        <th>Harga Akhir</th>
                    </tr>
                    <tr>
                        <td>Tempat A</td>
                        <td>08.00</td>
                        <td>17.00</td>
                        <td>2</td>
                        <td>Rp. 100.000</td>
                        <td>Rp. 200.000</td>
                    </tr>
                    <tr>
                        <td>Tempat B</td>
                        <td>08.00</td>
                        <td>17.00</td>
                        <td>2</td>
                        <td>Rp. 100.000</td>
                        <td>Rp. 200.000</td>
                    </tr>
                    <tr>
                        <td>Tempat C</td>
                        <td>08.00</td>
                        <td>17.00</td>
                        <td>2</td>
                        <td>Rp. 100.000</td>
                        <td>Rp. 200.000</td>
                    </tr>
                </table>
            </div>
            <div class="pesanan-per-hari">
                <h2>Jumat, 5 Oktober 2023</h2>
                <table>
                    <tr>
                        <th>Kebutuhan</th>
                        <th>Waktu Awal</th>
                        <th>Waktu Awal</th>
                        <th>Jumlah</th>
                        <th>Harga Satuan</th>
                        <th>Harga Akhir</th>
                    </tr>
                    <tr>
                        <td>Tempat D</td>
                        <td>08.00</td>
                        <td>17.00</td>
                        <td>2</td>
                        <td>Rp. 100.000</td>
                        <td>Rp. 200.000</td>
                    </tr>
                    <tr>
                        <td>Tempat E</td>
                        <td>08.00</td>
                        <td>17.00</td>
                        <td>2</td>
                        <td>Rp. 100.000</td>
                        <td>Rp. 200.000</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="totalharga">
        <h3>Total Harga: 1.000.000</h3>
    </div>
    <button type="submit" class="konfirmasi" id="buttonkonfirmasi"><a href="dashboard.php">Konfirmasi</a></button>
</body>
</html>