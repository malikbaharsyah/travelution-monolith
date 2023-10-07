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
    <link rel="stylesheet" href="../../public/css/konfirmasipesanan.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Open+Sans&family=Poppins:wght@300&family=Roboto&display=swap" rel="stylesheet">
    <title>Travelution</title>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="konfirmasipemesanan">
        <h1>Konfirmasi Pemesanan</h1>
        <div class="listpemesanan">
            <div class="pesanan-per-hari">
                <h2>Kamis, 4 Oktober 2023</h2>
                <table>
                    <tr>
                        <th>Kebutuhan</th>
                        <th>Waktu Awal</th>
                        <th>Waktu Akhir</th>
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
                        <th>Waktu Akhir</th>
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
    <button type="submit" class="konfirmasi" id="buttonkonfirmasi"><a href="dashboard">Konfirmasi</a></button>
</body>
</html>