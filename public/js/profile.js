const updateInfo = async() => {
    const usernameElement = document.getElementById("profile-username");
    const firstNameElement = document.getElementById("profile-firstname");
    const lastNameElement = document.getElementById("profile-lastname");
    const emailElement = document.getElementById("profile-email");
    const phoneElement = document.getElementById("profile-phone");

    if (username) {

        const lib = new Lib();
        const res = await lib.get('/api/profile');
        console.log(res);
        const jsonRes = JSON.parse(res);
        
        datas = jsonRes["data"];
        usernameElement.textContent = datas["Username"];
        firstNameElement.textContent = datas["FirstName"];
        lastNameElement.textContent = datas["LastName"];
        emailElement.textContent = datas["Email"];
        phoneElement.textContent = datas["PhoneNumber"];
    } else {
        // User is not logged in, show "login first" message
        const loginMessageElement = document.createElement("p");
        loginMessageElement.textContent = "Please login first to view your information.";
        document.querySelector(".infouser").appendChild(loginMessageElement);
    }
}

window.onload = updateInfo;