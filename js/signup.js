
//getting all inputs text obj
var username = document.forms['vform.username'];
var email = document.forms['vform.mail'];
var phone = document.forms['vform.phone'];
var cpassword = document.forms['vform.cpsw'];
var password = document.forms['vform.psw'];
        
//getting all error display objects
var username_error = document.getElementById('name_error');
var email_error = document.getElementById('email_error');
var phone_error = document.getElementById('phone_error');
var password_error = document.getElementById('password_error');
var cpassword_error = document.getElementById('cpassword_error');
        

        
//validation function
"use strict";
function validate() {
    if (!username.value) {
        username.style.border = "1px solid red";
        username_error.textContent = "Username is required";
        username.focus();
        return false;
    }
    if (username.value.length < 4) {
        username.style.border = "1px solid red";
        username.style.color = "red";
        username_error.textContent = "Username must be at least 3 characters";
        username.focus();
        return false;
    }
    if (email.value === "") {
        email.style.border = "1px solid red";
        email_error.textContent = "Email is required";
        email.focus();
        return false;
    }

    if (phone.value === "") {
        phone.style.border = "1px solid red";
        phone_error.textContent = "Phone is required";
        phone.focus();
        return false;
    }
    if (password.value === "") {
        password.style.border = "1px solid red";
        password_error.textContent = "Password is required";
        password.focus();
        return false;
    }
    if (cpassword.value === password.value) {
        cpassword.style.border = "1px solid red";
        cpassword_error.textContent = "The two passwords are not matching";
        cpassword.focus();
        return false;
    }
}
function nameverify() {
    if (username.value !== "") {
        username.style.border = "1px solid #ccc";
        username_error.innerHTML = "";
        return true;
    }
}
function emailverify() {
    if (email.value !== "") {
        email.style.border = "1px solid #ccc";
        email_error.innerHTML = "";
        return true;
    }
}
function phoneverify() {
    if (phone.value !== "") {
        phone.style.border = "1px solid #ccc";
        phone_error.innerHTML = "";
        return true;
    }
}
function passwordverify() {
    if (password.value !== "") {
        password.style.border = "1px solid #ccc";
        password_error.innerHTML = "";
         
    }
    if (cpassword.value === password.value) {
       cpassword.style.border = "1px solid #ccc";
       cpassword_error.innerHTML = "";
  
    }
    return true;
}


//setting all event listeners
        
username.addEventListener('blur', nameverify, true);
        
email.addEventListener('blur', emailverify, true);
        
password.addEventListener('blur', passwordverify, true);
        
phone.addEventListener('blur', phoneverify, true);