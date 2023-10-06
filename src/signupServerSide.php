<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    

    $host = "172.21.0.3";
    $port = "3306";
    $dbusername = "root"; // Change this to your database username
    $dbpassword = "1234"; // Change this to your database password
    $dbname = "travelution_database"; // Change this to your database name

    try {
        $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $dbusername, $dbpassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO Account(Username, Password, FirstName, LastName, Email, PhoneNumber, Role) VALUES (:username, :password, :firstname, :lastname, :email, :phonenumber, 'User')";
        
        $stmt = $pdo->prepare($sql);

        // Bind values to the parameters
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phonenumber', $phonenumber);

        // Set values for the parameters
        $username = $_POST["username"];
        $password = $_POST["password"];
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = "'" . $_POST["email"] . "'";
        $phonenumber = $_POST["phonenumber"];

        // Execute the prepared statement
        $stmt->execute();
        
        $data = ['message' => 'Sign Up Success'];
        echo json_encode($data);

        // Make sure to exit or stop further script execution to prevent unintended output
        exit;
    
        
    } catch (PDOException $e) {
        $data = ['message' => $e->getMessage()];
        echo json_encode($data);
    }
} else {
    $data = ['message' => 'Access denied'];
        echo json_encode($data);
}
?>