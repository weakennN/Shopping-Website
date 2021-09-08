function isEmpty(input) {
    return input.length > 0;
}

function isEmail(email) {
    let emailRegex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return emailRegex.test(email);
}

function isCorrectPassLength(password) {
    return password.length >= 6;
}

function createInputErrorMessage() {
    let errorMessage = document.createElement("p");
    errorMessage.classList.add("p-0", "text-danger", "mt-2");
    return errorMessage;
}

function emailValidation(email) {
    let errorMessage = document.createElement("p");
    errorMessage.classList.add("p-0", "text-danger", "mt-2");

    if (!isEmpty(email)) {
        errorMessage.textContent = "This field is required";
        return errorMessage;
    } else if (!isEmail(email)) {
        errorMessage.textContent = "Email is invalid try email like (name@domain.com).";
        return errorMessage;
    }

    return null;
}

function verifyPassword(password) {
    let errorMessage = document.createElement("p");
    errorMessage.classList.add("p-0", "text-danger", "mt-2");

    if (!isEmpty(password)) {
        errorMessage.textContent = "This field is required";
        return errorMessage;
    } else if (!isCorrectPassLength(password)) {
        errorMessage.textContent = "password length must be at least 6 characters long."
        return errorMessage;
    }

    return null;
}

function validatePassword(value, append) {
    let errorMessage = verifyPassword(document.getElementById(value).value);

    if (errorMessage !== null) {
        if (document.getElementById(append).children.length < 3) {
            document.getElementById(append).appendChild(errorMessage);
        }

        return false;
    }

    return true;
}

function containsNumber(value) {
    let regex = /[0-9]+/;
    return regex.test(value);
}