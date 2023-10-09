const getCategory = async (e) => {
    e.preventDefault();

    const formData = new FormData();

    const lib = new Lib();
    const res = await lib.get('/api/get-places-category', formData);
    const jsonRes = JSON.parse(res);
    // console.log(jsonRes["message"])

    var catDropDown = document.getElementById("type-dropdown");
    
    if(catDropDown.firstChild != null)
        while (catDropDown.firstChild) {
            catDropDown.removeChild(catDropDown.firstChild);
        }

    jsonRes["message"].forEach(cat => {
        const label = document.createElement('label');

        const input = document.createElement('input');

        input.setAttribute('type', 'checkbox');
        input.setAttribute('id', cat["PlaceType"]);
        input.setAttribute('value', cat["PlaceType"]);

        label.textContent = cat["PlaceType"];
        label.style.display = 'flex';
        label.style.alignItems = 'center'; // Vertically center align the checkbox and text
        input.style.order = '-1'; // Move the checkbox to the left
        label.appendChild(input);
        catDropDown.appendChild(label); 
    });
}