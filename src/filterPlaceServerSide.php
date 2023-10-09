<?php
include_once 'pdo.php';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $category = $_POST["category"];
    $location = $_POST["location"];
    $search = $_POST["search"];
    $sortby = $_POST["sortby"];
    $order = $_POST["order"];
    $offset = $_POST["offset"];

    $categoryArray = explode(', ', $category);
    $locationArray = explode(', ', $location);
    
    $params = array();

    if($category == "" && $location == "" && $search == "")
    $sql = $sql = "SELECT * from Place";
    else
    $sql = "SELECT * from Place WHERE ";
    if ($category != "")
    {
        $placeholder = "";
        foreach ($categoryArray as $index => $value) {
            $placeholder .= (":category" . $index . ", ");
            $key = ":category" . $index;
            $params[$key] = $value;
        }
        $placeholder = substr($placeholder, 0, -2);
        $sql = $sql . "PlaceType IN (" . $placeholder . ") AND ";

    }
    if ($location != "")
    {
        $placeholder = "";
        foreach ($locationArray as $index => $value) {
            $placeholder .= (":location" . $index . ", ");
            $key = ":location" . $index;
            $params[$key] = $value;
        }
        $placeholder = substr($placeholder, 0, -2);
        $sql = $sql . "PlaceLocation IN (" . $placeholder . ") AND ";
    }
    if ($search != "")
    {
        $sql = $sql . "PlaceName LIKE CONCAT('%', :search, '%') AND ";
        $key = ":search";
        $value = $search;
        $params[$key] = $value;
    }
    if($category != "" || $location != "" || $search != "")
    $sql = substr($sql, 0, -5);

    if ($sortby != "")
    {
        $sql = $sql . " ORDER BY $sortby $order";
    }

    $sql = $sql . " LIMIT (" . $offset . ", 18)";
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