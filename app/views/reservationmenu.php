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
    <link rel="stylesheet" href="../../public/css/reservationmenu.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Open+Sans&family=Poppins:wght@300&family=Roboto&display=swap" rel="stylesheet">
    <title>Travelution</title>
</head>
<body>
    <?php include 'navbar.php'; ?>  
    <div class="reservasimenu">
        <h1>Reservation Menu</h1>
        <div class="reservasimenuinfo">
            <div class="datekunjungan">
                <label for="datekunjungan">Tanggal Kunjungan: </label>
                <input type="date" name="datekunjungan" id="datekunjungan">
            </div>
            <div class="jumlahpengunjung">
                <label for="jumlahpengunjung">Jumlah Pengunjung: </label>
                <input type="number" name="jumlahpengunjung" id="jumlahpengunjung">
            </div>
            <div class="waktumasuk">
                <label for="waktumasuk">Waktu Masuk: </label>
                <input type="time" name="waktumasuk" id="waktumasuk">
            </div>
            <div class="waktukeluar">
                <label for="waktukeluar">Waktu Keluar: </label>
                <input type="time" name="waktukeluar" id="waktukeluar">
            </div>
        </div>
        <button type="submit" name="submit" id="submit"><a href="dashboard">Order</a></button>
    </div>
</body>
</html>