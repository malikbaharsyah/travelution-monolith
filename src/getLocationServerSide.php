<?php
include_once 'pdo.php';

if ($_SERVER["REQUEST_METHOD"] == "GET")
{
    $params = array();

    $sql = "SELECT DISTINCT PlaceLocation from Place";
    
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