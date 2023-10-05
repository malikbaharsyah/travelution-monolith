const logout = document.getElementById("logout");

logout.addEventListener("click", function () {
    const confirmLogout = confirm("Yakin mau logout?");
    if (confirmLogout) {
        window.location.href = "../../app/views/landingpage.php"
    }
});