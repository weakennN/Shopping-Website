function createAddToFavouriteNotification() {
    let toast = document.createElement("div");
    toast.classList.add("toast", "border-0");
    let toastBody = document.createElement("div");
    toastBody.classList.add("toast-body");
    toast.appendChild(toastBody);
    let flexRow = document.createElement("div");
    flexRow.classList.add("d-flex", "flex-row", "p-2", "text-wrap");
    let toastIcon = document.createElement("i");
    toastIcon.style.color = "#2a7af5";
    toastIcon.classList.add("fas", "fa-heart", "fa-3x");
    let toastText = document.createElement("p");
    toastText.classList.add("ms-3", "text-wrap", "mb-0");
    toastText.innerText = "The product was added to favourite";
    flexRow.append(toastIcon, toastText);
    toastBody.appendChild(flexRow);

    return toast;
}

function createRemoveFromFavouriteNotification() {
    let toast = document.createElement("div");
    toast.classList.add("toast", "border-0");
    let toastBody = document.createElement("div");
    toastBody.classList.add("toast-body");
    toast.appendChild(toastBody);
    let flexRow = document.createElement("div");
    flexRow.classList.add("d-flex", "flex-row", "p-2", "text-wrap");
    let toastIcon = document.createElement("i");
    toastIcon.classList.add("far", "fa-heart", "fa-3x");
    toastIcon.style.color = "#2a7af5";
    let toastText = document.createElement("p");
    toastText.classList.add("ms-3", "text-wrap", "mb-0");
    toastText.innerText = "The product was removed from favourite";
    flexRow.append(toastIcon, toastText);
    toastBody.appendChild(flexRow);

    return toast;
}

function displayNotification(toast, options) {
    document.getElementById("toast-container").prepend(toast);
    let toastElement = new bootstrap.Toast(toast, options);
    toastElement.show();
}

function displayAddToFavouriteNotification() {
    let toast = createAddToFavouriteNotification();
    let options = {
        animation: true,
        delay: 1500
    };
    displayNotification(toast, options);
}

function displayRemoveFromFavouriteNotification() {
    let toast = createRemoveFromFavouriteNotification();
    let options = {
        animation: true,
        delay: 1500
    }
    displayNotification(toast, options);
}