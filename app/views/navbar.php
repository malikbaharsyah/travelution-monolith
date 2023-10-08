<?php
    if(isset($_SESSION['Role'])){
        if ($_SESSION['Role'] == 'admin'){
            echo '<div class="navbar">
            <ul>
                <li><a href="#">' . $_SESSION["Username"] . '</a>
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
                        <li><a href="list-tempat-wisata">Tempat Wisata</a></li>
                        <li><a href="list-akomodasi">Akomodasi</a></li>
                    </ul>
                </li>
                <li><a href="create-travel-plan">TravelPlan</a></li>
                <li><a href="dashboard">Home</a></li>
                <li><img src="../../public/package/logo2.png" alt="Travelution Logo"></li>
            </ul>
        </div>';
        } else {
            echo '<div class="navbar">
            <ul>
                <li><a href="#">' . $_SESSION["Username"] . '</a>
                    <ul class="profiledropdownadmin">
                        <li><a href="profile">Profil</a></li>
                        <li><a id="logout">Logout</a></li>
                        <script src="../../public/js/logout.js"></script>
                    </ul>
                </li>
                <li><a href="#">Menu</a>
                    <ul class="menudropdown">
                        <li><a href="list-tempat-wisata">Tempat Wisata</a></li>
                        <li><a href="list-akomodasi">Akomodasi</a></li>
                    </ul>
                </li>
                <li><a href="create-travel-plan">TravelPlan</a></li>
                <li><a href="dashboard">Home</a></li>
                <li><img src="../../public/package/logo2.png" alt="Travelution Logo"></li>
            </ul>
        </div>';
        }
    } else {
        echo '<div class="navbar">
        <ul>
            <li><a href="login">Login</a></li>
            <li><a href="signup">Sign Up</a></li>
            <li><a href="#">Menu</a>
                <ul class="menudropdown">
                    <li><a href="list-tempat-wisata">Tempat Wisata</a></li>
                    <li><a href="list-akomodasi">Akomodasi</a></li>
                </ul>
            </li>
            <li><a href="#" id="homeLink">Home</a></li>
            <li><img src="../../public/package/logo2.png" alt="Travelution Logo"></li>
        </ul>
        <script src="../../public/js/home.js"></script>
    </div>';
    }
?>