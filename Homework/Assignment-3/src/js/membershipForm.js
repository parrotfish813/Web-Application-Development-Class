var firstError = docuemnt.getElementById('first-error');
var lastError = docuemnt.getElementById('last-error');
var phoneError = docuemnt.getElementById('phone-error');
var emailError = docuemnt.getElementById('email-error');
var passwordError = docuemnt.getElementById('password-error');

function validateFirst() {
    var first = document.getElementById('form-first').value;

    if(first.length == 0) {
        firstError.innerHTML = 'name is required';
        return false;
    }

    if(!first.match(/^[A-Za-z]*\&)) {
        firstError.innerHTML = 'invalid name';
        return false;
    }

    else if(first.charAt(0) != first.charAt(0).toUpperCase()) {
        first.charAt(0).toUpperCase() + first.slice(1);
    }
}