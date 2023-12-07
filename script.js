

const cc = document.querySelector('.cc');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnPopup = document.querySelector('.btnLogin-popup');


registerLink.addEventListener('click',()=>{
    cc.classList.add('active');
    
});

loginLink.addEventListener('click',()=>{
    cc.classList.remove('active');
    
});


btnPopup.addEventListener('click',()=>{
    cc.classList.add('active-popup');
    
});


function validateForm() {
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
        alert('Form submitted successfully!');
    }
}

function validateForm() {
    let username = document.getElementById('usernameInput').value;
    let email = document.getElementById('emailInput').value;
    let password = document.getElementById('passwordInput').value;

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
    } else {
        alert('Form submitted successfully!');
    }
}


