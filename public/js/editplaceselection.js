document.addEventListener("DOMContentLoaded" , async () => {
    const searchInput = document.getElementById("search");
    const sortedSelect = document.getElementById("sorted");
    const toggleButton1 = document.getElementById("toggle-dropdown1");
    const dropdown1 = document.getElementById("category-dropdown");
    const toggleButton2 = document.getElementById("toggle-dropdown2");
    const dropdown2 = document.getElementById("location-dropdown");
    const filterButton = document.getElementById("buttonfilter");
    const urlParams = new URLSearchParams(window.location.search);
    const page = (urlParams.get('page')-1)*18;
    const loadDestination = async (e) => {
        if (e)
        e.preventDefault();
    
        function getTypeFilter() {
            const checkboxes = document.querySelectorAll('#category-dropdown input[type="checkbox"]:checked');
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
        // console.log(sortedSelect);
        const formData = new FormData();
        formData.append("category", typeString);
        formData.append("location", locationString);
        formData.append("search", searchInput);
        formData.append("offset", page);
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
        // console.log(res);
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
    
            var newLink = document.createElement("a");
            newLink.href = "/edit-place-info?placeid="+place["PlaceID"]; 
    
            var newImage = document.createElement("img");
            fetch('/api/get-place-image', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    PlaceId: place["PlaceID"],
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
                newImage.src = imageUrl;
                newImage.alt = "destination1";
            })
            .catch(error => {
                console.error('error getting profile image:', error);
            });
    
            var newH2 = document.createElement("h2");
            newH2.textContent = place["PlaceName"];
    
            var newH3 = document.createElement("h3");
            newH3.textContent = place["PlaceLocation"];
    
            newLink.appendChild(newImage);
            newLink.appendChild(newH2);
            newLink.appendChild(newH3);
    
            newDiv.appendChild(newLink);
            container.appendChild(newDiv);
        });
    
        
    }

    await loadDestination();

    const lib = new Lib();
    const debouncedLoadDestination = lib.debounce(loadDestination);

    toggleButton1.addEventListener("click", function () {
        dropdown1.style.display = dropdown1.style.display === "block" ? "none" : "block";
    });
    
    toggleButton2.addEventListener("click", function () {
        dropdown2.style.display = dropdown2.style.display === "block" ? "none" : "block";
    });

    filterButton.addEventListener('click', loadDestination);

    sortedSelect.addEventListener("change", loadDestination);

    searchInput.addEventListener("input", debouncedLoadDestination);
});