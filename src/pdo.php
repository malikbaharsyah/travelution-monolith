<?php
function executeSQL($sql, $params = array()) {
    $host = "172.21.0.3";
    $port = "3306";
    $dbusername = "root";
    $dbpassword = "1234";
    $dbname = "travelution_database";

    try
    {
        $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $dbusername, $dbpassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $pdo->prepare($sql);

        foreach ($params as $paramName => &$paramValue)
        {
            $stmt->bindParam($paramName, $paramValue);
        }

        // $stmt->debugDumpParams();
        $stmt->execute();
        return $stmt;

    }
    catch (PDOException $e)
    {
        throw $e;
    }
}

?>