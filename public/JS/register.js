document.getElementById("first-name").addEventListener("focusout", function () {
    let errorMessage = verifyName(document.getElementById("first-name").value);

    if (errorMessage !== null) {
        document.getElementById("first-name-input").appendChild(errorMessage);
    }
});

document.getElementById("first-name").addEventListener("focusin", function () {
    if (document.getElementById("first-name-input").children.length >= 3) {
        document.getElementById("first-name-input").removeChild(document.getElementById("first-name-input").children.item(2));
    }
});

document.getElementById("last-name").addEventListener("focusout", function () {
    let errorMessage = verifyName(document.getElementById("last-name").value);

    if (errorMessage !== null) {
        document.getElementById("last-name-input").appendChild(errorMessage);
    }
});

document.getElementById("last-name").addEventListener("focusin", function () {
    if (document.getElementById("last-name-input").children.length >= 3) {
        document.getElementById("last-name-input").removeChild(document.getElementById("last-name-input").children.item(2));
    }
});

document.getElementById("email").addEventListener("focusout", function () {
    let errorMessage = emailValidation(document.getElementById("email").value);

    if (errorMessage !== null) {
        document.getElementById("email-input").appendChild(errorMessage);
    }
});

document.getElementById("email").addEventListener("focusin", function () {
    if (document.getElementById("email-input").children.length >= 3) {
        document.getElementById("email-input").removeChild(document.getElementById("email-input").children.item(2));
    }
});

document.getElementById("password").addEventListener("focusout", function () {
    let errorMessage = verifyPassword(document.getElementById("password").value);

    if (errorMessage !== null) {
        document.getElementById("password-input").appendChild(errorMessage);
    }
});

document.getElementById("password").addEventListener("focusin", function () {
    if (document.getElementById("password-input").children.length >= 3) {
        document.getElementById("password-input").removeChild(document.getElementById("password-input").children.item(2));
    }
});

document.getElementById("repeat-password").addEventListener("focusout", function () {
    let errorMessage = verifyRepeatPassword(document.getElementById("repeat-password").value);

    if (errorMessage !== null) {
        document.getElementById("repeat-password-input").appendChild(errorMessage);
    }
});

document.getElementById("repeat-password").addEventListener("focusin", function () {
    if (document.getElementById("repeat-password-input").children.length >= 3) {
        document.getElementById("repeat-password-input").removeChild(document.getElementById("repeat-password-input").children.item(2));
    }
});

function verifyName(name) {
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