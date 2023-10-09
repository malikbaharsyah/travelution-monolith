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
    <link rel="stylesheet" href="../../public/css/travelplan.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Open+Sans&family=Poppins:wght@300&family=Roboto&display=swap" rel="stylesheet">
    <title>Travelution</title>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="createtravelplan">
        <h1>Ongoing Travel Plan</h1>
        <div class="listrencanaperjalanan">
            <div class="box-rencanaperjalanan">
                <a href="konfirmasi-pesanan">
                <label id="travelplan">Rencana Perjalanan 1</label>
                <h2>19 Januari 2024 - 25 Januari 2024</h2>
                </a>
            </div>
            <div class="box-rencanaperjalanan">
                <a href="konfirmasi-pesanan">
                <label id="travelplan">Rencana Perjalanan 2</label>
                <h2>19 Januari 2024 - 25 Januari 2024</h2>
                </a>
            </div>
            <div class="box-rencanaperjalanan">
                <a href="konfirmasi-pesanan">
                <label id="travelplan">Rencana Perjalanan 3</label>
                <h2>19 Januari 2024 - 25 Januari 2024</h2>
                </a>
            </div>
        </div>
    </div>
</body>
</html>