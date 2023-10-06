<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel="icon" type="image/png" href="../../public/package/logo.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../../public/css/signup.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Open+Sans&family=Poppins:wght@300&family=Roboto&display=swap" rel="stylesheet">
    <title>Travelution</title>
</head>
<body>
    <div class="signup">
        <h1>Sign Up Menu</h1>
        <div class="signupinfo">
            <h2>Username:</h2>
            <input type="text" name="username" id="username" placeholder="Username">
            <h2>Password:</h2>
            <input type="password" name="password" id="password" placeholder="Password">
        </div>
        <div class="verticalline"></div>
        <div class="nameinfo">
            <h2>First Name:</h2>
            <h2>Last Name:</h2>
            <input type="text" name="firstname" id="firstname" placeholder="First Name">
            <input type="text" name="lastname" id="lastname" placeholder="Last Name">
        </div>
        <div class="emailphone">
            <h2>Email:</h2>
            <input type="text" name="email" id="email" placeholder="Email"><br>
            <span id="email-error" class="error"></span>
            <h2>Phone Number:</h2>
            <input type="text" name="phonenumber" id="phonenumber" placeholder="Phone Number">
        </div>
        <button type="submit" name="submit" id="submit" onclick="signup(event)">Sign Up</button>
    </div>
    <script src="../../public/js/httprequest.js"></script>
    <script src="../../public/js/signup.js"></script>
</body>
</html>