// JS untuk menampilkan informasi wisata yang dipilih sesuai dengan id yang dikirimkan dari halaman sebelumnya

document.addEventListener("DOMContentLoaded", function () {
    const destinationName = document.getElementById("namatempat").textContent;
    const destinationLocation = document.getElementById("lokasitempat").textContent;    
    document.getElementById("infonamatempat").textContent = destinationName;
    document.getElementById("infolokasitempat").textContent = destinationLocation;
});