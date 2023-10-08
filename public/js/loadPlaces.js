const loadDestination = async (e) => {
    e.preventDefault();

    function getTypeFilter() {
        const checkboxes = document.querySelectorAll('#type-dropdown input[type="checkbox"]:checked');
        const selectedValues = Array.from(checkboxes).map(checkbox => checkbox.value);
        return selectedValues;
    }

    function getLocationFilter() {
        const checkboxes = document.querySelectorAll('#location-dropdown input[type="checkbox"]:checked');
        const selectedValues = Array.from(checkboxes).map(checkbox => checkbox.value);
        return selectedValues;
    }

    const sortedSelect = document.getElementById("sorted").value;
    const searchInput = document.getElementById("search").value;

    const typeArray = getTypeFilter();
    const locationArray = getLocationFilter();
    const typeString = typeArray.join(', ');
    const locationString = locationArray.join(', ');
    console.log(sortedSelect);
    const formData = new FormData();
    formData.append("category", typeString);
    formData.append("location", locationString);
    formData.append("search", searchInput);
    if (sortedSelect === "Termurah")
    {
        formData.append("sortby", "PlacePrice");
        formData.append("order", "ASC");

    }
    else if (sortedSelect === "Termahal")
    {
        formData.append("sortby", "PlacePrice");
        formData.append("order", "DESC");
    }
    else if (sortedSelect === "Huruf A-Z")
    {
        formData.append("sortby", "PlaceName");
        formData.append("order", "ASC");
    }
    else
    {
        formData.append("sortby", "");
        formData.append("order", "");
    }

    const lib = new Lib();
    const res = await lib.post('/api/filterPlaces', formData);
    console.log(res);
    const jsonRes = JSON.parse(res);
    
    var container = document.getElementById("destinationContainer");
    
    var divs = container.querySelectorAll('div');
    for (var i = 0; i < divs.length; i++) {
        var div = divs[i];
        div.parentNode.removeChild(div);
    }


    jsonRes["message"].forEach(place => {
        var newDiv = document.createElement("div");
        newDiv.className = "destinationbox";

        // Create an <a> element with an "href" attribute
        var newLink = document.createElement("a");
        newLink.href = "/info-place";

        // Create an <img> element with "src" and "alt" attributes
        var newImage = document.createElement("img");
        newImage.src = "../../public/package/purpletravel.jpg";
        newImage.alt = "destination1";

        // Create <h2> and <h3> elements with text content
        var newH2 = document.createElement("h2");
        newH2.textContent = place["PlaceName"];

        var newH3 = document.createElement("h3");
        newH3.textContent = place["PlaceLocation"];

        // Append elements to construct the desired structure
        newDiv.appendChild(newImage);
        newDiv.appendChild(newH2);
        newDiv.appendChild(newH3);

        newDiv.appendChild(newLink);
        container.appendChild(newDiv);
    });

    

    // request = [["pantai", "gunung"], ["jawa barat", "jawa tengah"]]
}


