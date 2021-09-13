$(".add-to-cart").click(addToCart);

function addToCart() {
    let product = document.getElementById(this.id).parentElement;
    let productId = this.id;
    let productLink = product.getElementsByTagName("a")[0].getAttribute("href");
    let productImageSource = product.getElementsByTagName("img")[0].getAttribute("src");
    let title = product.getElementsByClassName("text-decoration-none")[0].children.item(0).innerHTML;
    let price = product.getElementsByClassName("text-decoration-none")[0].children.item(1).innerHTML.substr(product.getElementsByClassName("text-decoration-none")[0].children.item(1).innerHTML.indexOf("$") + 1);

    addToUserCart(productId, 1);

    if (!updateProductQuantity(title)) {
        let cartWrapperElement = createCartWrapperElement(title, productLink, productImageSource, price, productId);
        document.getElementById("cart-wrapper").appendChild(cartWrapperElement);
    }

    updateCartBadge(1);
    updateSubTotal(parseFloat(price));
    setAddToCartAlertFields(title, productImageSource, price, productLink);
}

