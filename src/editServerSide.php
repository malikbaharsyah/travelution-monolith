<?php
if (isset($_POST['submit'])) {
    $placeID = $_POST['placeID'];
    $placename = $_POST['placename'];
    $location = $_POST['location'];
    $price = $_POST['price'];
    $type = $_POST['type'];
    $openhour = $_POST['openhour'];
    $closehour = $_POST['closehour'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $description = $_POST['description'];
    
    $conn = mysqli_connect("localhost", "root", "", "travelution");
    
    $query = "UPDATE Place SET
              PlaceName = '$placename',
              PlaceLocation = '$location',
              PlacePrice = '$price',
              PlaceType = '$type',
              PlaceOpenTime = '$openhour',
              PlaceCloseTime = '$closehour',
              PlaceContact = '$contact',
              PlaceEmail = '$email',
              PlaceWebsite = '$website',
              PlaceDescription = '$description'
              WHERE PlaceID = $placeID";
    
    $result = mysqli_query($conn, $query);
    
    if ($result) {
        echo "<script>alert('Data berhasil diperbarui!')</script>";
    } else {
        echo "<script>alert('Data gagal diperbarui!')</script>";
    }
}
?>