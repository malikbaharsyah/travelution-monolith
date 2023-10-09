const uploadDestination = async (e) => {
    e.preventDefault();

    const namaTempat = document.getElementById('placename').value;
    const lokasi = document.getElementById('location').value;
    const harga = document.getElementById('price').value;
    const kontak = document.getElementById('contact').value;
    const jamBuka = document.getElementById('openhour').value;
    const jamTutup = document.getElementById('closehour').value;
    const deskripsi = document.getElementById('description').value;
    const tipe = document.getElementById('type').value;
    const email = document.getElementById('email').value;
    const website = document.getElementById('website').value;

    const formData = new FormData();
    formData.append('image', document.getElementById('upload').files[0]);
    formData.append('nama_tempat', namaTempat);
    formData.append('lokasi', lokasi);
    formData.append('harga', harga);
    formData.append('kontak', kontak);
    formData.append('jam_buka', jamBuka);
    formData.append('jam_tutup', jamTutup);
    formData.append('deskripsi', deskripsi);
    formData.append('tipe', tipe);
    formData.append('email', email);
    formData.append('website', website);

    try {
        const response = await fetch('/api/add-destination', {
            method: 'POST',
            body: formData
        });

        if (response.ok) {
            const jsonRes = await response.json();
            // console.log(jsonRes);
        } else {
            console.error('Error:', response.status, response.statusText);
        }
    } catch (error) {
        console.error('Error:', error);
    }
};
