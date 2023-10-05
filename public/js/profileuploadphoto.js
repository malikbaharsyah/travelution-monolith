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

file.addEventListener("change", function () {
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

deleteButton.addEventListener("click", function () {
  const confirmDelete = confirm("Yakin mau hapus foto profil?");
  if (confirmDelete) {
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