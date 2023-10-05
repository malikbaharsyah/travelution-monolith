const username = document.getElementById("username");
const password = document.getElementById("password");
const loginBtn = document.getElementById("submit");
const usernameLink = document.getElementById("namapengguna1");

loginBtn.addEventListener('click', function () {
    const enteredUsername = username.value;
    const enteredPassword = password.value;

    // Tinggal add parameter role bwat nentuin sebagai admin atau user
    if (enteredUsername === "jasonrivalino" && enteredPassword === "jayyrv23") {
        window.location.href = "../../app/views/dashboard.php";
        usernameLink.textContent = enteredUsername;
    } else {
        alert("Username atau password salah! Coba lagi ya!");
    }
});