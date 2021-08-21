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

document.getElementById("login-button").addEventListener("click", function (e) {
    e.preventDefault(); //this stops the form action
})
