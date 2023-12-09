const cc = document.querySelector('.cc');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnPopup = document.querySelector('.btnLogin-popup');
const iconClose=document.querySelector('.icon-close');
const coverDiv = document.querySelector('.cover');

registerLink.addEventListener('click', () => {
    cc.classList.add('active');
    document.querySelector('.login').classList.add('hidden');
    document.querySelector('.register').classList.remove('hidden');
    coverDiv.style.display = 'none';
});

loginLink.addEventListener('click', () => {
    cc.classList.remove('active');
    document.querySelector('.login').classList.remove('hidden');
    document.querySelector('.register').classList.add('hidden');
    coverDiv.style.display = 'none';
});

btnPopup.addEventListener('click', () => {
    cc.classList.add('active-popup');
    coverDiv.style.display = 'none';
});

iconClose.addEventListener('click', () => {
    cc.classList.remove('active-popup');
    coverDiv.style.display = 'block';
});


function validateLoginForm() {
    let email = document.getElementById('emailInput').value;
    let password = document.getElementById('passwordInput').value;

    let emailRegex = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
    let passwordRegex = /^.{8,16}$/;

    if (email.trim() === '' || password.trim() === '') {
        alert('Please enter both email and password.');
    } else if (!emailRegex.test(email)) {
        alert('Email is not in the correct format.');
    } else if (!passwordRegex.test(password)) {
        alert('Password should be between 8 and 16 characters.');
    } else {
        alert('Login successful!');
    }
}

function validateRegisterForm() {
    let username = document.getElementById('Username').value;
    let email = document.getElementById('emailInput').value;
    let password = document.getElementById('passwordInput').value;
    let agreeCheckbox = document.getElementById('agreeCheckbox').checked;

    let usernameRegex = /^[A-Za-z0-9_]+$/;
    let emailRegex = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
    let passwordRegex = /^.{8,16}$/;

    if (username.trim() === '' || email.trim() === '' || password.trim() === '') {
        alert('Please enter username, email, and password.');
    } else if (!usernameRegex.test(username)) {
        alert('Username is not in the correct format.');
    } else if (!emailRegex.test(email)) {
        alert('Email is not in the correct format.');
    } else if (!passwordRegex.test(password)) {
        alert('Password should be between 8 and 16 characters.');
    } else if (!agreeCheckbox) {
        alert('Please agree to the terms and conditions.');
    } else {
        alert('Registration successful!');
    }
}

function redirectToCollection() {

    window.location.href = "collection.html";
    }
