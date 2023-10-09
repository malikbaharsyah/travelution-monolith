<?php
include_once 'pdo.php';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    try {
        $sql = "SELECT * from Place WHERE PlaceID = :placeid";
        $params = array(':placeid' => $_POST["PlaceID"]);
        
        $stmt = executeSQL($sql, $params);
        
        $res = array();
        while ($record = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            array_push($res, $record);
        }
        $data = ['message' => $res];
    
        echo json_encode($data);
        exit;
    } catch (PDOException $e) {
        $res = ['message' => $e];
        echo json_encode($res);
    } 
}

?>