const submit = document.querySelector('.submit');
const newdestinationbox = document.getElementById('listdestination')

submit.addEventListener('click', AddNew);

function AddNew() {
    const destinationboxbaru = document.createElement('div');
    destinationboxbaru.classList.add('destinationbox');
    newdestinationbox.body.appendChild(destinationboxbaru);
}