<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $username = $_POST["username"];
    $password = $_POST["password"];

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

                    $data = ['message' => 'Success login'];
                    echo json_encode($data);

                    // Make sure to exit or stop further script execution to prevent unintended output
                    exit;
                }
                else
                {
                    $data = ['message' => 'Wrong username or password'];
                    echo json_encode($data);
                }
            }
            else
            {
                $data = ['message' => 'Wrong username or password'];
                echo json_encode($data);
            }
        }
        else {
            // Data is missing or invalid, display an error message
            $data = ['message' => 'Fill the blanks'];
            echo json_encode($data);
        }
    } catch (PDOException $e) {
        $data = ['message' => 'Connection failed'];
        echo json_encode($data);
    }
} else {
    $data = ['message' => 'Access denied'];
    echo json_encode($data);
}
?>