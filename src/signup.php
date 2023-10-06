<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $data = $_POST["data"];
    $username = $data["Username"];
    $password = $data["Password"];
    $firstname = $data["FirstName"];
    $lastname = $data["LastName"];
    $email = $data["Email"];
    $phonenumber = $data["Phonenumber"];

    $host = "172.21.0.3";
    $port = "3306";
    $dbusername = "root"; // Change this to your database username
    $dbpassword = "1234"; // Change this to your database password
    $dbname = "travelution_database"; // Change this to your database name

    try {
        // Create a PDO connection
        $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $dbusername, $dbpassword);
    
        // Set PDO to throw exceptions on errors
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        // Example query
        $sql = "SELECT username, password FROM Account WHERE username = '$username'"; // Change this to your table name
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    
        
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
} else {
    echo "Access denied.";
}
?>