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



