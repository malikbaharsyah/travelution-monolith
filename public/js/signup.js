const signup = async (e) => {
    e.preventDefault();

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
        const formData = new FormData();
        formData.append("username", username);
        formData.append("password", password);
        formData.append("firstname", firstname);
        formData.append("lastname", lastname);
        formData.append("email", email);
        formData.append("phonenumber", phonenumber);

        const lib = new Lib();
        const res = await lib.post('/api/signup', formData);
        console.log(res)
        const jsonRes = JSON.parse(res);
        if (jsonRes["message"]=="Sign Up Success")
        {
            window.location.href = "/login";
        }
        else
        {
            alert(jsonRes["message"])
            window.location.href = "/signup";
        }
    }
}

function validateEmail(email) {
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return emailPattern.test(email);
}
