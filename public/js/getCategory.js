const getCategory = async (e) => {
    e.preventDefault();

    const lib = new Lib();
    const res = await lib.get('/api/get-places-category');
    const jsonRes = JSON.parse(res);
    
    var catDropDown = document.getElementById("category-dropdown");
    
    if(catDropDown.firstChild != null)
    {
        while (catDropDown.firstChild) {
            catDropDown.removeChild(catDropDown.firstChild);
        }
    }
    (jsonRes["message"]).forEach(cat => {

        const label = document.createElement('label');

        const input = document.createElement('input');

        input.setAttribute('type', 'checkbox');
        input.setAttribute('id', cat["PlaceType"]);
        input.setAttribute('value', cat["PlaceType"]);

        label.textContent = cat["PlaceType"];
        label.style.display = 'flex';
        label.style.alignItems = 'center';
        input.style.order = '-1';
        label.appendChild(input);
        catDropDown.appendChild(label);
    });

}