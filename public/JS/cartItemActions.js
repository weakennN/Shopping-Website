function initCartWrapperItemAction() {
    let cartItems = document.getElementsByClassName("card-wrapper-item");

    for (let i = 0; i < cartItems.length; i++) {
        let cartItem = cartItems.item(i);
        let productId = cartItem.getElementsByTagName("a").item(0).getAttribute("href")
            .substr(cartItem.getElementsByTagName("a").item(0).getAttribute("href").indexOf("id=") + 3);
        let closeButton = cartItem.getElementsByTagName("button").item(0);
        let price = cartItem.getElementsByClassName("cart-wrapper-price").item(0).textContent.substr(1);
        let quantity = cartItem.getElementsByClassName("quantity").item(0);
        removeCartWrapperItem(closeButton, cartItem, productId, price, quantity);
    }
}

function removeCartWrapperItem(closeButton, productCard, productId, price, quantity) {
    closeButton.addEventListener("click", function () {
        productCard.classList.add("fade-out");
        setTimeout(function () {
            removeFromCartWrapper(productCard, productId);
            updateSubTotal(-(parseFloat(price) * parseInt(quantity.textContent.split(/[\s]+/)[1])));
        }, 1000)
    })
}

initCartWrapperItemAction();