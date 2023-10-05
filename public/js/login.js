const login = async (e) => {
    e.preventDefault();

    const password = document.getElementById("password").value;
    const username = document.getElementById("username").value;

    const formData = new FormData();
    formData.append("username", username);
    formData.append("password", password);

    const lib = new Lib();
    const res = await lib.post('/api/login', formData);
    const jsonRes = JSON.parse(res);
    console.log(jsonRes);
}
