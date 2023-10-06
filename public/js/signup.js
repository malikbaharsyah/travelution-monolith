document.getElementById("submit").addEventListener("click", function(event) {
    event.preventDefault();

    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;
    const firstname = document.getElementById("firstname").value;
    const lastname = document.getElementById("lastname").value;
    const email = document.getElementById("email").value;
    const phonenumber = document.getElementById("phonenumber").value;

    // Check if the email input is empty
    if (username.trim() === "" || password.trim() === "" || firstname.trim() === "" || lastname.trim() === "" || email.trim() === "" || phonenumber.trim() === "") {
        alert("Isi datanya yang lengkap mas/mbak!");
    } else if (!validateEmail(email)) {
        alert("Masukin emailnya yang bener dong!");
    } else {
        var data = {
            Username: username,
            Password: password,
            FirstName: firstname,
            LastName: lastname,
            Email: email,
            PhoneNumber: phonenumber
        };
        makeRequest(data, "POST", "../../src/signupphp.php", true);
    }
});

function validateEmail(email) {
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
}