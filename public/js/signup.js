document.getElementById("submit").addEventListener("click", function(event) {
    event.preventDefault();
    
    const email = document.getElementById("email").value;

    if (validateEmail(email)) {
        window.location.href = "../../app/views/login.php";
    } else {
        alert("Please enter a valid email address.");
    }
});

function validateEmail(email) {
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
}