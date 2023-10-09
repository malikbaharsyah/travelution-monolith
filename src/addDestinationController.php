<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imageFile = $_FILES['image'];
    $imageName = basename($imageFile['name']);

    $namaTempat = $_POST['nama_tempat'];
    $lokasi = $_POST['lokasi'];
    $harga = $_POST['harga'];
    $kontak = $_POST['kontak'];
    $jamBuka = $_POST['jam_buka'];
    $jamTutup = $_POST['jam_tutup'];
    $deskripsi = $_POST['deskripsi'];
    $tipe = $_POST['tipe'];
    $email = $_POST['email'];
    $website = $_POST['website'];

    $targetDir = "../db/PlaceImg/";
    
    
    $host = "172.21.0.3";
    $port = "3306";
    $dbusername = "root"; // Change this to your database username
    $dbpassword = "1234"; // Change this to your database password
    $dbname = "travelution_database"; // Change this to your database name

    try {
        // Create a PDO connection
        $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $dbusername, $dbpassword);
    
        // Set PDO to throw exceptions on errors
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $sql = "SELECT count(PlaceID) AS count FROM Place";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        
        $countIdPlace = $stmt->fetch((PDO::FETCH_ASSOC))["count"];
        $idPlace = $countIdPlace + 1;

        $sql = "INSERT INTO Place 
        (PlaceID, PlaceName, PlaceLocation, PlaceDescription, PlaceType, PlacePrice, PlaceOpenTime, PlaceCloseTime, PlaceContact, PlaceEmail, PlaceWebsite) 
        VALUES ($idPlace, '$namaTempat', '$lokasi', '$deskripsi', '$tipe', $harga, '$jamBuka', '$jamTutup', '$kontak', '$email', '$website')";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        
        $fileName = $idPlace . '_1' . '.' . strtolower(pathinfo($imageName, PATHINFO_EXTENSION));

        $sql = "INSERT INTO PlaceImage () VALUES ($idPlace, '$fileName') ";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        
        $targetFile = $targetDir . $fileName;

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            $data = ['message' => 'Destination added successfully'];
            echo json_encode($data);
        } else {
            $data = ['message' => 'Failed to add destination'];
            echo json_encode($data);
        }

        
    } catch (PDOException $e) {
        $data = ['message' => $e];
        echo json_encode($data);
    }

} else {
    $data = ['message' => 'Access denied'];
    echo json_encode($data);
}