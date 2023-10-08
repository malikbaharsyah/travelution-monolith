const getLocation = async (e) => {
    e.preventDefault();

    const formData = new FormData();

    const lib = new Lib();
    const res = await lib.get('/api/get-places-location', formData);
    const jsonRes = JSON.parse(res);
    console.log(jsonRes["message"])
    
    var locDropDown = document.getElementById("location-dropdown");
    
    while (locDropDown.firstChild) {
        locDropDown.removeChild(locDropDown.firstChild);
    }
    jsonRes["message"].forEach(loc => {
        const label = document.createElement('label');

        const input = document.createElement('input');

        input.setAttribute('type', 'checkbox');
        input.setAttribute('id', loc["PlaceLocation"]);
        input.setAttribute('value', loc["PlaceLocation"]);

        label.textContent = loc["PlaceLocation"];
        label.style.display = 'flex';
        label.style.alignItems = 'center';
        input.style.order = '-1';
        label.appendChild(input);
        locDropDown.appendChild(label); 
    });
}