document.getElementById("email").addEventListener("focusout", function () {
    let errorMsg = emailValidation(document.getElementById("email").value);
    if (errorMsg !== null) {
        document.getElementById("email-input").appendChild(errorMsg);
    }
})

document.getElementById("password").addEventListener("focusout", function () {
    let errorMsg = verifyPassword(document.getElementById("password").value);
    if (errorMsg != null) {
        document.getElementById("password-input").appendChild(errorMsg);
    }
})

document.getElementById("email").addEventListener("focusin", function () {
    document.getElementById("email-input").removeChild(document.getElementById("email-input").children.item(2));
})

document.getElementById("password").addEventListener("focusin", function () {
    if (document.getElementById("password-input").children.length >= 3) {
        document.getElementById("password-input").removeChild(document.getElementById("password-input").children.item(2));
    }
})

document.getElementById("login-button").addEventListener("click", function () {
    let disable = false;

    let errorMsg = emailValidation(document.getElementById("email").value);
    if (errorMsg !== null) {
        if (document.getElementById("email-input").children.length < 3) {
            document.getElementById("email-input").appendChild(errorMsg);
        }
        disable = true;
    }

    let errorMsg1 = verifyPassword(document.getElementById("password").value);
    if (errorMsg1 !== null) {
        if (document.getElementById("password-input").children.length < 3) {
            document.getElementById("password-input").appendChild(errorMsg);
        }
        disable = true;
    }

    if (disable === false) {
        document.getElementById("login-button").setAttribute("type", "submit");
    }
})
