<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Retrieve the form data
    $username = $_GET["username"];
    $password = $_GET["password"];

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
        $sql = "SELECT * FROM Account WHERE username = '$username'"; // Change this to your table name
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    
        // Fetch data
        if (!empty($username) && !empty($password) && isset($username) && isset($password)) {
            if ($stmt->rowCount() > 0)
            {
                $data = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($data["Password"] == $password) {
                    session_start();
                    $_SESSION["Username"] = $username;
                    $_SESSION["Password"] = $password;
                    $_SESSION["FirstName"] = $data["FirstName"];
                    $_SESSION["LastName"] = $data["LastName"];
                    $_SESSION["Email"] = $data["Email"];
                    $_SESSION["PhoneNumber"] = $data["PhoneNumber"];
                    $_SESSION["Role"] = $data["Role"];
                    $redirect_url = "../app/views/dashboard.php"; // Replace with your desired URL

                    // Perform the redirection
                    header("Location: $redirect_url");

                    // Make sure to exit or stop further script execution to prevent unintended output
                    exit;
                }
                else
                {
                    echo "Wrong password";
                }
            }
            else
            {
                echo $username;
                echo "Wrong username";
            }
        }
        else {
            echo "Please fill in all the fields.";
        }
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
} else {
    echo "Access denied.";
}
?>