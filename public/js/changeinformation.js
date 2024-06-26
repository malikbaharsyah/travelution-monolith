window.onload = function () {
    const profileUsername = document.getElementById("profile-username");
    const profileFirstname = document.getElementById("profile-firstname");
    const profileLastname = document.getElementById("profile-lastname");
    const profileEmail = document.getElementById("profile-email");
    const profilePhone = document.getElementById("profile-phone");

    const storedUsername = localStorage.getItem("username");
    const storedFirstname = localStorage.getItem("firstname");
    const storedLastname = localStorage.getItem("lastname");
    const storedEmail = localStorage.getItem("email");
    const storedPhone = localStorage.getItem("phone");

    profileUsername.textContent = storedUsername;
    profileFirstname.textContent = storedFirstname;
    profileLastname.textContent = storedLastname;
    profileEmail.textContent = storedEmail;
    profilePhone.textContent = storedPhone;
};

function validateEmail(email) {
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
}

document.getElementById("submit").addEventListener("click", function () {
    const newUsername = document.getElementById("username").value;
    const newFirstname = document.getElementById("firstname").value;
    const newLastname = document.getElementById("lastname").value;
    const newEmail = document.getElementById("email").value;
    const newPhone = document.getElementById("phone").value;

    const storedUsername = localStorage.getItem("username");
    const storedFirstname = localStorage.getItem("firstname");
    const storedLastname = localStorage.getItem("lastname");
    const storedEmail = localStorage.getItem("email");
    const storedPhone = localStorage.getItem("phone");

    const confirmChange = confirm("Yakin mau ganti informasi akun?");

    if (confirmChange) {
        if (newEmail.trim() !== "" && !validateEmail(newEmail)) {
            alert("Masukin emailnya yang bener dong!");
            return;
        }

        if (newUsername.trim() !== "" || newFirstname.trim() !== "" || newLastname.trim() !== "" || newEmail.trim() !== "" || newPhone.trim() !== "") {
            localStorage.setItem("username", newUsername || storedUsername);
            localStorage.setItem("firstname", newFirstname || storedFirstname);
            localStorage.setItem("lastname", newLastname || storedLastname);
            localStorage.setItem("email", newEmail || storedEmail);
            localStorage.setItem("phone", newPhone || storedPhone);
        }
        window.location.href = "profile";
    }
});