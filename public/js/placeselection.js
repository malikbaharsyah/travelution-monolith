document.addEventListener("DOMContentLoaded", function () {
    const filterDaerahSelect = document.getElementById("filterdaerah");
    const sortedSelect = document.getElementById("sorted");
    const listDestination = document.querySelector(".listdestination");
    const searchInput = document.getElementById("search");
    const destinationBoxes = document.querySelectorAll(".destinationbox");

    function sortDestinationBoxesAZ() {
        const destinationBoxesArray = Array.from(destinationBoxes);
        destinationBoxesArray.sort((boxA, boxB) => {
            const nameA = boxA.querySelector("h2").textContent.trim().toLowerCase();
            const nameB = boxB.querySelector("h2").textContent.trim().toLowerCase();
            return nameA.localeCompare(nameB);
        });
        destinationBoxesArray.forEach((box) => {
            listDestination.appendChild(box);
        });
    }

    function filterDestinationBoxes() {
        var searchValue = searchInput.value.toLowerCase();
        destinationBoxes.forEach(function (box) {
            var h2Text = box.querySelector("h2").textContent.toLowerCase();
            if (h2Text.includes(searchValue)) {
                box.style.display = "block";
            } else {
                box.style.display = "none";
            }
        });
    }

    filterDaerahSelect.addEventListener("change", function () {
        const selectedValue = filterDaerahSelect.value;
        destinationBoxes.forEach(function (box) {
            const lokasiTempat = box.querySelector("h3").textContent;
            if (selectedValue === "Semua" || selectedValue === lokasiTempat) {
                box.style.display = "block";
            } else {
                box.style.display = "none";
            }
        });
    });

    sortedSelect.addEventListener("change", function () {
        if (sortedSelect.value === "Huruf A-Z") {
            sortDestinationBoxesAZ();
        }
    });

    searchInput.addEventListener("input", function () {
        filterDestinationBoxes();
    });
});