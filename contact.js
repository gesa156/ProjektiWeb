function validateContactForm() {
    var firstName = document.querySelector("#Nameinput").value;
    var lastName = document.querySelector("#Lastinput").value;
    var email = document.querySelector("#EmailInput").value;
    var mobileNumber = document.querySelector("#Mobileinput").value;
    var message = document.querySelector("#Textinput").value;

    var nameRegex = /^[a-zA-Z\s]+$/;
    if (!nameRegex.test(firstName) || !nameRegex.test(lastName)) {
        alert('Please enter valid first and last names.');
        return false;
    }

    var emailRegex = /[a-zA-Z._-]+@[a-z]+\.[a-z]{2,3}$/;
    if (!emailRegex.test(email)) {
        alert('Please enter a valid email.');
        return false;
    }

    var mobileNumberRegex = /^\d{10}$/;
    if (!mobileNumberRegex.test(mobileNumber)) {
        alert('Please enter a valid 10-digit mobile number.');
        return false;
    }

    if (message.trim() === '') {
        alert('Please write your message.');
        return false;
    }

    document.querySelector("#Nameinput").value = '';
    document.querySelector("#Lastinput").value = '';
    document.querySelector("#EmailInput").value = '';
    document.querySelector("#Mobileinput").value = '';
    document.querySelector("#Textinput").value = '';
    alert('Message Sent Successfully');
    return true; 
}

