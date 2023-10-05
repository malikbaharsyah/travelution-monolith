<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel="icon" type="image/png" href="../../public/package/logo.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../../public/css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Open+Sans&family=Poppins:wght@300&family=Roboto&display=swap" rel="stylesheet">
    <title>Travelution</title>
</head>
<body>
    <!-- <div class="login">
        <h1>Login Menu</h1>
        <h2>Username:</h2>
        <input type="text" name="username" id="username" placeholder="Username">
        <h2>Password:</h2>
        <input type="password" name="password" id="password" placeholder="Password">
        <p>Belum punya akun, <a href="signup.php">daftar dulu</a></p>
        <button type="submit" name="submit" id="submit">Login</button> -->
    <div class="login">
        <h1>Login Menu</h1>
        <form action="../../src/loginCheck.php" method="get">
        Username: <input type="text" name="username" placeholder="Username"><br>
        Password: <input type="text" name="password" placeholder="Password"><br>
        <input type="submit">
        </form>
    </div>
    <script src="../../public/js/login.js"></script>
</body>
</html>