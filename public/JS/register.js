document.getElementById("first-name").addEventListener("focusout", function () {
    verifyName("first-name", "first-name-input");
});

document.getElementById("first-name").addEventListener("focusin", function () {
    if (document.getElementById("first-name-input").children.length >= 3) {
        document.getElementById("first-name-input").removeChild(document.getElementById("first-name-input").children.item(2));
    }
});

document.getElementById("last-name").addEventListener("focusout", function () {
    verifyName("last-name", "last-name-input");
});

document.getElementById("last-name").addEventListener("focusin", function () {
    if (document.getElementById("last-name-input").children.length >= 3) {
        document.getElementById("last-name-input").removeChild(document.getElementById("last-name-input").children.item(2));
    }
});

document.getElementById("email").addEventListener("focusout", function () {
    verifyRegisterEmail()
});

document.getElementById("email").addEventListener("focusin", function () {
    if (document.getElementById("email-input").children.length >= 3) {
        document.getElementById("email-input").removeChild(document.getElementById("email-input").children.item(2));
    }
});

document.getElementById("password").addEventListener("focusout", function () {
    validatePassword("password", "password-input");
});

document.getElementById("password").addEventListener("focusin", function () {
    if (document.getElementById("password-input").children.length >= 3) {
        document.getElementById("password-input").removeChild(document.getElementById("password-input").children.item(2));
    }
});

document.getElementById("repeat-password").addEventListener("focusout", function () {

});

document.getElementById("repeat-password").addEventListener("focusin", function () {
    if (document.getElementById("repeat-password-input").children.length >= 3) {
        document.getElementById("repeat-password-input").removeChild(document.getElementById("repeat-password-input").children.item(2));
    }
});

document.getElementById("register-button").addEventListener("click", function (e) {
    let firstNameValidation = verifyName("first-name", "first-name-input");
    let lastNameValidation = verifyName("last-name", "last-name-input");
    let emailValidation = verifyRegisterEmail();
    let passwordValidation = validatePassword("password", "password-input");
    let repeatPasswordValidation = validateRepeatPassword();

    if (firstNameValidation !== false && lastNameValidation !== false &&
        emailValidation !== false && passwordValidation !== false && repeatPasswordValidation !== false) {
        document.getElementById("register-button").setAttribute("type", "submit");
    }
})

function verifyNameLength(name) {
    let errorMessage = createErrorMessage();
    if (!isEmpty(name)) {
        errorMessage.textContent = "This field is required.";
        return errorMessage;
    }

    return null;
}

function verifyRepeatPassword(password) {
    let errorMessage = createErrorMessage();

    if (!isEmpty(password)) {
        errorMessage.textContent = "this field is required.";
        return errorMessage
    } else if (document.getElementById("password").value !== password) {
        errorMessage.textContent = "password are not identical."
        return errorMessage;
    }

    return null;
}

function verifyName(value, append) {
    let errorMessage = verifyNameLength(document.getElementById(value).value);

    if (errorMessage !== null) {
        if (document.getElementById(append).children.length < 3) {
            document.getElementById(append).appendChild(errorMessage);
        }
        return false;
    }

    return true;
}

function verifyRegisterEmail() {
    let errorMessage = emailValidation(document.getElementById("email").value);

    if (errorMessage !== null) {
        if (document.getElementById("email-input").children.length < 3) {
            document.getElementById("email-input").appendChild(errorMessage);
        }
        return false;
    }

    return true;
}

function validateRepeatPassword() {
    let errorMessage = verifyRepeatPassword(document.getElementById("repeat-password").value);

    if (errorMessage !== null) {
        if (document.getElementById("repeat-password-input").children.length < 3) {
            document.getElementById("repeat-password-input").appendChild(errorMessage);
        }
        return false;
    }

    return true;
}