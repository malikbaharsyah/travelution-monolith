document.addEventListener("DOMContentLoaded", function () {
    const sortedSelect = document.getElementById("sorted");
    const listDestination = document.querySelector(".listdestination");
    const searchInput = document.getElementById("search");

    function sortDestinationBoxesAZ() {
        const destinationBoxes = Array.from(listDestination.querySelectorAll(".destinationbox"));
        destinationBoxes.sort((boxA, boxB) => {
            const nameA = boxA.querySelector("h2").textContent.trim().toLowerCase();
            const nameB = boxB.querySelector("h2").textContent.trim().toLowerCase();
            return nameA.localeCompare(nameB);
        });
        destinationBoxes.forEach((box) => {
            listDestination.appendChild(box);
        });
    }

    function filterDestinationBoxes() {
        var searchValue = searchInput.value.toLowerCase();
        const destinationBoxes = document.querySelectorAll(".destinationbox");
        destinationBoxes.forEach(function (box) {
            var h2Text = box.querySelector("h2").textContent.toLowerCase();
            if (h2Text.includes(searchValue)) {
                box.style.display = "block";
            } else {
                box.style.display = "none";
            }
        });
    }

    sortedSelect.addEventListener("change", function () {
        if (sortedSelect.value === "Huruf A-Z") {
            sortDestinationBoxesAZ();
        }
    });
    searchInput.addEventListener("input", function () {
        filterDestinationBoxes();
    });
});
