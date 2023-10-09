<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (!isset($_SESSION["Username"])) {
        $res = ['message' => 'Access denied'];
        echo json_encode($res);
    } else {
        $host = "172.21.0.3";
        $port = "3306";
        $dbusername = "root";
        $dbpassword = "1234";
        $dbname = "travelution_database";
        
        try {
            $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $dbusername, $dbpassword);
        
            // Set PDO to throw exceptions on errors
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $username = $_SESSION["Username"];

            $sql = "SELECT Username, FirstName, LastName, Email, PhoneNumber FROM Account WHERE Username = '$username'"; // Change this to your table name
            $stmt = $pdo->prepare($sql);
            $stmt->execute();

            $data = $stmt->fetch(PDO::FETCH_ASSOC);

            $res = ['data' => $data, 'message' => 'Information obtained'];
            echo json_encode($res);


        } catch (PDOException $e) {
            $res = ['message' => $e];
            echo json_encode($res);
        } 
    }
}

elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_SESSION["Username"])) {
        $res = ['message' => 'Access denied'];
        echo json_encode($res);
    } else {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $host = "172.21.0.3";
        $port = "3306";
        $dbusername = "root";
        $dbpassword = "1234";
        $dbname = "travelution_database";
        
        try {
            $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $dbusername, $dbpassword);
        
            // Set PDO to throw exceptions on errors
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $oldUsername = 'wfabler4';
            $sql = "UPDATE Account SET Password='$password', FirstName='$firstname', LastName='$lastname', Email='$email', PhoneNumber='$phone' WHERE Username = '$oldUsername'"; // Change this to your table name
            $stmt = $pdo->prepare($sql);
            $stmt->execute();

            $data = $stmt->fetch(PDO::FETCH_ASSOC);

            $res = ['data' => $data, 'message' => 'Information changed'];
            echo json_encode($res);


        } catch (PDOException $e) {
            $res = ['message' => $e];
            echo json_encode($res);
        } 
    }
}

else {
    $res = ['message' => 'Access denied'];
    echo json_encode($res);
}