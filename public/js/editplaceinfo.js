window.onload = async () => {
    const urlParams = new URLSearchParams(window.location.search);
    const placeId = urlParams.get('placeid');

    const formData = new FormData();
    formData.append("PlaceID", placeId);

    const lib = new Lib();
    const res = await lib.post('api/get-place-info', formData);
    const jsonRes = JSON.parse(res);

    var placeName = document.getElementById("placename");
    var location = document.getElementById("location");
    var price = document.getElementById("price");
    var type = document.getElementById("type");
    var openhour = document.getElementById("openhour");
    var closehour = document.getElementById("closehour");
    var contact = document.getElementById("contact");
    var email = document.getElementById("email");
    var website = document.getElementById("website");
    var description = document.getElementById("description");

    const placeData = jsonRes["message"];
    placeName.placeholder = placeData[0]["PlaceName"];
    location.placeholder = placeData[0]["PlaceLocation"];
    price.placeholder = placeData[0]["PlacePrice"];
    type.placeholder = placeData[0]["PlaceType"];
    openhour.placeholder = placeData[0]["PlaceOpenTime"];
    closehour.placeholder = placeData[0]["PlaceCloseTime"];
    contact.placeholder = placeData[0]["PlaceContact"];
    email.placeholder = placeData[0]["PlaceEmail"];
    website.placeholder = placeData[0]["PlaceWebsite"];
    description.placeholder = placeData[0]["PlaceDesctription"];

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
        window.location.href = "edit-place";
    }
});