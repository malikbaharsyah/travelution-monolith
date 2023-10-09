const updateInfo = async() => {
    const usernameElement = document.getElementById("profile-username");
    const firstNameElement = document.getElementById("profile-firstname");
    const lastNameElement = document.getElementById("profile-lastname");
    const emailElement = document.getElementById("profile-email");
    const phoneElement = document.getElementById("profile-phone");

    if (username) {

        const lib = new Lib();
        const res = await lib.get('/api/profile');
        const jsonRes = JSON.parse(res);
        
        datas = jsonRes["data"];
        img = jsonRes["image"];
        usernameElement.textContent = datas["Username"];
        firstNameElement.textContent = datas["FirstName"];
        lastNameElement.textContent = datas["LastName"];
        emailElement.textContent = datas["Email"];
        phoneElement.textContent = datas["PhoneNumber"];

        fetch('/api/profile/img', {
            method : 'GET'
        })
        .then(response => {
            console.log(response);
            if (response.ok) {
                return response.blob();
            } else {
                throw new Error('Profile picture not found.');
            }
        })
        .then(blob => {
            // Create a URL for the blob response (the image)
            const imageUrl = URL.createObjectURL(blob);
            
            // Get the img element by its ID
            const imgElement = document.getElementById('profile-picture');

            // Set the src attribute of the img element to the blob image URL
            imgElement.src = imageUrl;
        })
        .catch(error => {
            console.error('error getting profile image:', error);
        });

    } else {
        // User is not logged in, show "login first" message
        const loginMessageElement = document.createElement("p");
        loginMessageElement.textContent = "Please login first to view your information.";
        document.querySelector(".infouser").appendChild(loginMessageElement);
    }
}

window.onload = updateInfo;

const imageLoad = document.querySelector(".photo-frame");
const image = document.querySelector("#profile-picture");
const file = document.querySelector("#profile-picture-input");
const uploadButton = document.querySelector("#profile-picture-upload");
const deleteButton = document.querySelector("#profile-picture-delete");

function updateProfilePicture() {
  const storedImageURL = localStorage.getItem("profileImage");
  if (storedImageURL) {
    image.setAttribute("src", storedImageURL);
  }
}

updateProfilePicture();

uploadButton.addEventListener("click", function () {

})

file.addEventListener("change", async function () {
  const choosedFile = this.files[0];
  if (choosedFile) {
    const reader = new FileReader();
    reader.addEventListener("load", function () {
      image.setAttribute("src", reader.result);
      localStorage.setItem("profileImage", reader.result);
    });
    reader.readAsDataURL(choosedFile);
    const formData = new FormData();
    formData.append('image', choosedFile);
    await fetch('/api/profile/img', {
        method: 'POST', 
        body: formData
    });
  }
});

deleteButton.addEventListener("click", function () {
  const confirmDelete = confirm("Yakin mau hapus foto profil?");
  if (confirmDelete) {
    fetch('/api/profile/img', {
      method : 'DELETE'
    });
    localStorage.removeItem("profileImage");
    image.setAttribute("src", "../../public/package/blankpp.jpg");
    const newFileInput = file.cloneNode(true);
    file.parentNode.replaceChild(newFileInput, file);
    newFileInput.addEventListener("change", function () {
      const choosedFile = this.files[0];
      if (choosedFile) {
        const reader = new FileReader();
        reader.addEventListener("load", function () {
          image.setAttribute("src", reader.result);
          localStorage.setItem("profileImage", reader.result);
        });
        reader.readAsDataURL(choosedFile);
      }
    });
  }
});