<?php
include_once 'pdo.php';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    try
    {
        $sql = "SELECT * FROM Account WHERE username = :username";
        $params = array(':username' => $username);
        $stmt = executeSQL($sql, $params);

        if (!empty($username) && !empty($password) && isset($username) && isset($password))
        {
            if ($stmt->rowCount() > 0)
            {
                $data = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($data["Password"] == $password)
                {
                    session_start();
                    $_SESSION["Username"] = $username;
                    $_SESSION["Password"] = $password;
                    $_SESSION["FirstName"] = $data["FirstName"];
                    $_SESSION["LastName"] = $data["LastName"];
                    $_SESSION["Email"] = $data["Email"];
                    $_SESSION["PhoneNumber"] = $data["PhoneNumber"];
                    $_SESSION["Role"] = $data["Role"];
                    $redirect_url = "../app/views/dashboard.php";
                    $data = ['message' => 'Success login'];
                    echo json_encode($data);

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
        else
        {
            $data = ['message' => 'Fill the blanks'];
            echo json_encode($data);
        }
    }
    catch (PDOException $e)
    {
        $data = ['message' => 'Connection failed'];
        echo json_encode($data);
    }
}
else
{
    $data = ['message' => 'Access denied'];
    echo json_encode($data);
}
?>