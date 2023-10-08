function addNewTravelPlan() {
    var newDiv = document.createElement("div");
    newDiv.className = "box-rencanaperjalanan";

    var link = document.createElement("a");
    link.href = "konfirmasi-pesanan";

    var label = document.createElement("label");
    label.id = "travelplan";

    var index = document.querySelectorAll(".box-rencanaperjalanan").length + 1;
    label.textContent = "Rencana Perjalanan " + index;

    var date = document.createElement("h2");
    date.textContent = "19 Januari 2024 - 25 Januari 2024";

    link.appendChild(label);
    link.appendChild(date);
    newDiv.appendChild(link);

    var listDiv = document.querySelector(".listrencanaperjalanan");
    listDiv.appendChild(newDiv);
}

var addButton = document.getElementById("addtravelplan");
addButton.addEventListener("click", addNewTravelPlan);
