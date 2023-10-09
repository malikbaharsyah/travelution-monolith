<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $postData = file_get_contents('php://input');
    
        $requestData = json_decode($postData);
        
        if ($requestData !== null)
        {
            $host = "172.21.0.3";
            $port = "3306";
            $dbusername = "root";
            $dbpassword = "1234";
            $dbname = "travelution_database";

            try {
                $placeid = $requestData->PlaceId;
                $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $dbusername, $dbpassword);
            
                // Set PDO to throw exceptions on errors
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
                $sql = "SELECT PlaceImg FROM PlaceImage WHERE PlaceID='$placeid'";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
    
                if ($stmt->rowCount() == 0) {
                    $res = ['message' => 'Image not found'];
                    echo json_encode($res);
                } else {
                    $fileName = $stmt->fetch((PDO::FETCH_ASSOC))["PlaceImg"];
                    $fileName = "../db/PlaceImg/" . $fileName;
                    $extension = pathinfo($fileName, PATHINFO_EXTENSION);
                    header('Content-Type: image/' . $extension);
                    readfile($fileName);
                    $res = ['message' => 'Image found'];
                    echo json_encode($res);
                }
    
            } catch (PDOException $e) {
                $res = ['message' => $e];
                echo json_encode($res);
            }         
            
    
            

        }
        else
        {
            $res = ['message' => "Post id null"];
            echo json_encode($res);
        }

    } catch (PDOException $e) {
        $res = ['message' => $e];
        echo json_encode($res);
    } 
}
?>