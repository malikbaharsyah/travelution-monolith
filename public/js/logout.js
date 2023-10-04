const logout = document.getElementById("logout");

logout.addEventListener("click", function () {
    const confirmLogout = confirm("Are you sure you want to logout?");
    if (confirmLogout) {
        window.location.href = "../../app/views/landingpage.php"
    }
});