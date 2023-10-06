<?php 
    if(isset($_SESSION['Role'])){
        if ($_SESSION['Role'] == 'admin'){
            echo '<div class="navbar">
                <ul>
                    <li><a id="namapengguna" href="#">Jason</a>
                        <ul class="profiledropdownadmin">
                            <li><a href="profileinformation.php">Profil</a></li>
                            <li><a href="piliheditwisata.php">Edit Destination</a></li>
                            <li><a href="piliheditakomodasi.php">Edit Accommodation</a></li>
                            <li><a id="logout">Logout</a></li>
                            <script src="../../public/js/logout.js"></script>
                        </ul>
                    </li>
                    <li><a href="#information">About</a></li>
                    <li><a href="#">Menu</a>
                        <ul class="menudropdown">
                            <li><a href="listtempatwisata(login).php">Tempat Wisata</a></li>
                            <li><a href="listakomodasi(login).php">Akomodasi</a></li>
                        </ul>
                    </li>
                    <li><a href="createtravelplan.php">TravelPlan</a></li>
                    <li><a href="#maintitle">Home</a></li>
                    <li><img src="../../public/package/logo2.png" alt="Travelution Logo"></li>
                </ul>
            </div>';
        } else {
            echo '<div class="navbar">
            <ul>
                <li><a id="namapengguna" href="#">Jason</a>
                    <ul class="profiledropdownadmin">
                        <li><a href="profileinformation.php">Profil</a></li>
                        <li><a id="logout">Logout</a></li>
                        <script src="../../public/js/logout.js"></script>
                    </ul>
                </li>
                <li><a href="#information">About</a></li>
                <li><a href="#">Menu</a>
                    <ul class="menudropdown">
                        <li><a href="listtempatwisata(login).php">Tempat Wisata</a></li>
                        <li><a href="listakomodasi(login).php">Akomodasi</a></li>
                    </ul>
                </li>
                <li><a href="createtravelplan.php">TravelPlan</a></li>
                <li><a href="#maintitle">Home</a></li>
                <li><img src="../../public/package/logo2.png" alt="Travelution Logo"></li>
            </ul>
        </div>';
        }
    } else {
        echo '<div class="navbar">
            <ul>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php">Sign Up</a></li>
                <li><a href="#information">About</a></li>
                <li><a href="#">Menu</a>
                    <ul class="menudropdown">
                        <li><a href="listtempatwisata(notlogin).php">Tempat Wisata</a></li>
                        <li><a href="listakomodasi(notlogin).php">Akomodasi</a></li>
                    </ul>
                </li>
                <li><a href="#maintitle">Home</a></li>
                <li><img src="../../public/package/logo2.png" alt="Travelution Logo"></li>
            </ul>
        </div>';
    }
?>