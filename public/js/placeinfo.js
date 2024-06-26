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
    var workhour = document.getElementById("workhour");
    var contact = document.getElementById("contact");
    var email = document.getElementById("email");
    var website = document.getElementById("website");
    var description = document.getElementById("description");
    var img = document.getElementById("image");
    const placeData = jsonRes["message"];
    // console.log(placeData[0]);
    placeName.innerHTML = placeData[0]["PlaceName"];
    location.innerHTML = placeData[0]["PlaceLocation"];
    price.innerHTML += placeData[0]["PlacePrice"];
    type.innerHTML += placeData[0]["PlaceType"];
    workhour.innerHTML += placeData[0]["PlaceOpenTime"] + " - " + placeData[0]["PlaceCloseTime"];
    contact.innerHTML += placeData[0]["PlaceContact"];
    email.innerHTML += placeData[0]["PlaceEmail"];
    website.innerHTML += placeData[0]["PlaceWebsite"];
    description.innerHTML = placeData[0]["PlaceDescription"];
    
    fetch('/api/get-place-image', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            PlaceId: placeId,
        }),
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
        const imageUrl = URL.createObjectURL(blob);
        console.log("TESS" + imageUrl);
        img.src = imageUrl;
    })
    .catch(error => {
        console.error('error getting profile image:', error);
    });

};