window.onload = function () {
    const infonamatempat = document.getElementById("namatempat");
    const infolokasitempat = document.getElementById("lokasitempat");

    const storedPlacename = localStorage.getItem("placename");
    const storedPlacelocation = localStorage.getItem("location");

    infonamatempat.textContent = storedPlacename;
    infolokasitempat.textContent = storedPlacelocation;
};

document.getElementById("submit").addEventListener("click", function () {
    const newPlacename = document.getElementById("placename").value;
    const newLocation = document.getElementById("location").value;

    const storedPlacename = localStorage.getItem("placename");
    const storedPlacelocation = localStorage.getItem("location");

    const confirmChange = confirm("Yakin mau ganti informasi tempat?");

    if (confirmChange) {
        if (newPlacename.trim() !== "" || newLocation.trim() !== "") {
            localStorage.setItem("placename", newPlacename || storedPlacename);
            localStorage.setItem("location", newLocation || storedPlacelocation);
        }
        window.location.href = "../../app/views/piliheditakomodasi.php";
    }
});