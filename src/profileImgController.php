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

            $sql = "SELECT ProfileImg from AccountProfile WHERE Username='$username'"; // Change this to your table name
            $stmt = $pdo->prepare($sql);
            $stmt->execute();

            if ($stmt->rowCount() == 0) {
                $res = ['message' => 'Profile not found'];
                echo json_encode($res);
            } else {
                $fileName = $stmt->fetch((PDO::FETCH_ASSOC))["ProfileImg"];
                $fileName = "../db/ProfileImg/" . $fileName;
                $extension = pathinfo($fileName, PATHINFO_EXTENSION);
                header('Content-Type: image/' . $extension);
                readfile($fileName);
                $res = ['message' => 'Profile image found'];
                echo json_encode($res);
            }

        } catch (PDOException $e) {
            $res = ['message' => $e];
            echo json_encode($res);
        } 
    }
}

elseif ($_SERVER["REQUEST_METHOD"] == 'DELETE') {
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

            $sql = "SELECT ProfileImg FROM AccountProfile WHERE Username='$username'"; // Change this to your table name
            $stmt = $pdo->prepare($sql);
            $stmt->execute();

            if ($stmt->rowCount() == 0) {
                $res = ['message' => 'Profile not found'];
                echo json_encode($res);
            } else {
                $fileName = $stmt->fetch((PDO::FETCH_ASSOC))["ProfileImg"];
                $fileName = "../db/ProfileImg/" . $fileName;
                $sql = "DELETE FROM AccountProfile WHERE Username = '$username'"; // Change this to your table name
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                unlink($fileName);
                $res = ['message' => 'Profile image deleted'];
                echo json_encode($res);
            }

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
        $imageFile = $_FILES['image'];
        $imageName = basename($imageFile['name']);
        
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
            $fileName = $username . '.' . strtolower(pathinfo($imageName, PATHINFO_EXTENSION));
            $sql = "SELECT * FROM AccountProfile WHERE Username='$username'";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();

            $countData = $stmt->rowCount();

            if ($countData == 0) {
                $sql = "INSERT INTO AccountProfile (Username, ProfileImg) VALUES ('$username', '$fileName')";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
            } else {
                $sql = "SELECT ProfileImg FROM AccountProfile WHERE Username='$username'";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                $oldfileName = $stmt->fetch(PDO::FETCH_ASSOC)["ProfileImg"];

                $sql = "UPDATE AccountProfile SET ProfileImg='$fileName' WHERE Username='$username'";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();

                unlink("../db/ProfileImg/" . $oldfileName);
            }
            
            if (move_uploaded_file($_FILES["image"]["tmp_name"], "../db/ProfileImg/" . $fileName)) {
                $data = ['message' => 'Profile picture updated successfully'];
                echo json_encode($data);
            } else {
                $data = ['message' => 'Failed to update profile picture'];
                echo json_encode($data);
            }


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
?>