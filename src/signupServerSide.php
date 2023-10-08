<?php
include_once 'pdo.php';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $phonenumber = $_POST["phonenumber"];
    $role = 'User';

    try 
    {   $sql = "SELECT * FROM Account WHERE username = :username";
        $params = array(':username' => $username);
        $stmt = executeSQL($sql, $params);
        if ($stmt->rowCount() > 0)
        {
            $data = ['message' => 'Username not available'];
            echo json_encode($data);
            exit;  
        }
        else
        {
            $sql = "INSERT INTO Account VALUES (:username, :password, :firstname, :lastname, :email, :phonenumber, 'User')";
            $params = array(
                ':username' => $username, 
                ':password' => $password, 
                ':firstname' => $firstname, 
                ':lastname' => $lastname, 
                ':email' => $email, 
                ':phonenumber' => $phonenumber
            );
    
            $stmt = executeSQL($sql, $params);
            
            $data = ['message' => 'Sign Up Success'];
            echo json_encode($data);
    
            exit;    
        }
    }
    catch (PDOException $e)
    {
        $data = ['message' => $e->getMessage()];
        echo json_encode($data);
    }
}
else
{
    $data = ['message' => 'Access denied'];
        echo json_encode($data);
}
?>