function setAddToCartAlertFields(title, image, price, link) {
    let modal = document.getElementById("add-to-cart-alert");
    modal.getElementsByClassName("title").item(0).textContent = title;
    modal.getElementsByTagName("img").item(0).setAttribute("src", image);
    modal.getElementsByTagName("a").item(0).setAttribute("href", link);
    modal.getElementsByTagName("a").item(1).setAttribute("href", link);
    modal.getElementsByClassName("price").item(0).textContent = "$" + price;
    showAddToCartAlert();
}

function showAddToCartAlert() {
    let modal = document.getElementById("add-to-cart-alert");
    let bsModal = bootstrap.Modal.getOrCreateInstance(modal);
    bsModal.show();
}