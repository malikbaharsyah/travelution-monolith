<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel="icon" type="image/png" href="../../public/package/logo.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../../public/css/profileinformation.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Open+Sans&family=Poppins:wght@300&family=Roboto&display=swap" rel="stylesheet">
    <title>Travelution</title>
</head>
<body>
    <div class="navbar">
        <ul>
            <li><a href="#">Jason</a>
                <ul class="profiledropdownadmin">
                    <li><a href="profile">Profil</a></li>
                    <li><a href="pilih-wisata">Edit Destination</a></li>
                    <li><a href="pilih-akomodasi">Edit Accomodation</a></li>
                    <li><a id="logout">Logout</a></li>
                    <script src="../../public/js/logout.js"></script>
                </ul>
            </li>
            <li><a href="#">Menu</a>
                <ul class="menudropdown">
                    <li><a href="list-tempat-wisata-l">Tempat Wisata</a></li>
                    <li><a href="list-akomodasi-l">Akomodasi</a></li>
                </ul>
            </li>
            <li><a href="create-travel-plan">TravelPlan</a></li>
            <li><a href="dashboard">Home</a></li>
            <li><img src="../../public/package/logo2.png" alt="Travelution Logo"></li>
        </ul>
    </div>
    <div class="profileinfo">
        <h1>Profile Menu</h1>
        <div class="photo-frame">
            <img src="../../public/package/blankpp.jpg" id="profile-picture">
            <input type="file" id="profile-picture-input">
            <label for="profile-picture-input" id="profile-picture-upload">Change Photo</label>
            <label id="profile-picture-delete">Delete Photo</label>
        </div>
        <script src="../../public/js/profileuploadphoto.js"></script>
        <div class="verticalline"></div>
        <div class="user-info">
            <h2>Information:</h2>
            <div class="infouser">
                <p>Username: <span id="profile-username"></span></p>
                <p>First Name: <span id="profile-firstname"></span></p>
                <p>Last Name: <span id="profile-lastname"></span></p>
                <p>Email: <span id="profile-email"></span></p>
                <p>Phone: <span id="profile-phone"></span></p>
            </div>
        </div>
        <button class="editprofile"><a href="change-information">Change Information</a></button>
    </div>
    <script src="../../public/js/changeinformation.js"></script>
</body>
</html>