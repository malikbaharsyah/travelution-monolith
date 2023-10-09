function validateEmail(email) {
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
}

document.getElementById("submit").addEventListener("click", function () {
    const newUsername = document.getElementById("username").value;
    const newPassword = document.getElementById("password").value;
    const newFirstname = document.getElementById("firstname").value;
    const newLastname = document.getElementById("lastname").value;
    const newEmail = document.getElementById("email").value;
    const newPhone = document.getElementById("phone").value;

    const confirmChange = confirm("Yakin mau ganti informasi akun?");

    if (confirmChange) {
        if (newEmail.trim() !== "" && !validateEmail(newEmail)) {
            alert("Masukin emailnya yang bener dong!");
            return;
        }

        if (newUsername.trim() !== "" || newPassword.trim() !== "" || newFirstname.trim() !== "" || newLastname.trim() !== "" || newEmail.trim() !== "" || newPhone.trim() !== "") {
            const formData = new FormData();
            formData.append("username", newUsername);
            formData.append("password", newPassword);
            formData.append("firstname", newFirstname);
            formData.append("lastname", newLastname);
            formData.append("email", newEmail);
            formData.append("phone", newPhone);
            fetch('/api/profile', {
                method: 'POST',
                body: formData
            });
        }
        window.location.href = "profile";

    }
});