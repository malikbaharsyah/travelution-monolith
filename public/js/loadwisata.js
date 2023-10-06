
function loadDestination(filter)
{
    var newDiv = document.createElement("div");
    newDiv.className = "destinationbox";

    // Create an <a> element with an "href" attribute
    var newLink = document.createElement("a");
    newLink.href = "infotempatwisata(notlogin).php";

    // Create an <img> element with "src" and "alt" attributes
    var newImage = document.createElement("img");
    newImage.src = "../../public/package/purpletravel.jpg";
    newImage.alt = "destination1";

    // Create <h2> and <h3> elements with text content
    var newH2 = document.createElement("h2");
    newH2.textContent = "Tempat A";

    var newH3 = document.createElement("h3");
    newH3.textContent = "Bogor, Indonesia";

    // Append elements to construct the desired structure
    newLink.appendChild(newImage);
    newLink.appendChild(newH2);
    newLink.appendChild(newH3);

    newDiv.appendChild(newLink);
    var container = document.getElementById("destinationContainer");
    container.appendChild(newDiv);

    request = [["pantai", "gunung"], ["jawa barat", "jawa tengah"]]
}
