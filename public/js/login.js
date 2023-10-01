const username = document.getElementById('username');
const password = document.getElementById('password');
const loginBtn = document.getElementById('submit');

loginBtn.addEventListener('click', function () {
    const enteredUsername = username.value;
    const enteredPassword = password.value;

    // Tinggal add parameter role bwat nentuin sebagai admin atau user
    if (enteredUsername === 'jasonrivalino' && enteredPassword === 'jayyrv23') {
        window.location.href = '../html/landingpagelogin(admin).html';
    } else {
        alert('Username or password is incorrect. Please try again.');
    }
});