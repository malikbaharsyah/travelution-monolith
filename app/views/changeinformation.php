<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel="icon" type="image/png" href="../../public/package/logo.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../../public/css/changeinformation.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Open+Sans&family=Poppins:wght@300&family=Roboto&display=swap" rel="stylesheet">
    <title>Travelution</title>
</head>
<body>
    <div class="navbar">
        <ul>
            <li><a href="#">Jason</a>
                <ul class="profiledropdownadmin">
                    <li><a href="profileinformation.php">Profil</a></li>
                    <li><a href="selecteditdestination.php">Edit Destination</a></li>
                    <!-- <li><a href="../html/adddestination.html">Edit Accomodation</a></li> -->
                    <li><a href="landingpage.php">Logout</a></li>
                    <script src="../../public/js/logout.js"></script>
                </ul>
            </li>
            <li><a href="#">Menu</a>
                <ul class="menudropdown">
                    <li><a href="listtempatwisata(login).php">Tempat Wisata</a></li>
                    <!-- <li><a href="#">Akomodasi</a></li> -->
                </ul>
            </li>
            <li><a href="dashboard.php">Home</a></li>
            <li><img src="../../public/package/logo2.png" alt="Travelution Logo"></li>
        </ul>
    </div>
    <div class="profile-user-info">
        <h1>Change Information</h1>
        <div class="user-information">
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
            <input type="text" name="email" id="email" placeholder="Email">
            <h2>Phone Number:</h2>
            <input type="text" name="phonenumber" id="phonenumber" placeholder="Phone Number">
        </div>
        <button type="submit" name="submit" id="submit">Change</button>
    </div>
    <script src="../../public/js/changeinformation.js"></script>
</body>
</html>