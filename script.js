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


function validateForm(event) {
    event.preventDefault(); // Prevent the form from submitting by default

    // You can add your validation logic here
    var email = document.getElementById('emailInput').value;
    var password = document.getElementById('passwordInput').value;

    // Example validation: Check if email and password are not empty
    if (email.trim() === '' || password.trim() === '') {
        alert('Please enter both email and password.');
    } else {
        // If validation passes, you can submit the form or perform other actions
        alert('Form submitted successfully!');
        // Uncomment the following line to submit the form
        // document.getElementById('loginForm').submit();
    }
}


