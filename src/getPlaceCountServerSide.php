<?php
include_once 'pdo.php';

if ($_SERVER["REQUEST_METHOD"] == "GET")
{
    
    $sql = "SELECT COUNT(PlaceID) as placeCount from Place";
    $params = array();
    
    $stmt = executeSQL($sql, $params);
    
    $res = array();
    while ($record = $stmt->fetch(PDO::FETCH_ASSOC))
    {
        array_push($res, $record);
    }
    $data = ['message' => $res];

    echo json_encode($data);
    exit;
}

?>