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
    var emailInput = document.getElementById("emailInput").value;
    var password = document.getElementById("password").value;

    var emailInputRegex = /[a-zA-Z._-]+@[a-z]+\.[a-z]{2,3}$/;
    
    if (!emailInputRegex.test(emailInput)) {
        alert('Please enter a valid email.');
        return false;
    }

    var passwordRegex = /^.{8,16}$/;
    
    if (!passwordRegex.test(password)) {
        alert('Please enter a valid password.');
        return false;
    }
    
    return true;
}


function validateRegisterForm() {
    var username=document.getElementById("username").value;
    var emailInput = document.getElementById("emailInput").value;
    var password = document.getElementById("password").value;


var usernameRegex=/^[a-zA-Z/s]+$/;
if (!usernameRegex.test(username)) {
    alert('Please enter a valid username.');
    return false;
}



    var emailInputRegex = /[a-zA-Z._-]+@[a-z]+\.[a-z]{2,3}$/;
    
    if (!emailInputRegex.test(emailInput)) {
        alert('Please enter a valid email.');
        return false;
    }

    var passwordRegex = /^.{8,16}$/;
    
    if (!passwordRegex.test(password)) {
        alert('Please enter a valid password.');
        return false;
    }
    
    return true;
}

function redirectToCollection() {

    window.location.href = "collection.html";
    }
