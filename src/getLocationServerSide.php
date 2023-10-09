<?php
include_once 'pdo.php';

if ($_SERVER["REQUEST_METHOD"] == "GET")
{
    try
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
    } catch (PDOException $e) {
        $res = ['message' => $e];
        echo json_encode($res);
    } 
}

?>