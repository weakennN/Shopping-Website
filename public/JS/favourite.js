let favouriteItems = document.getElementsByClassName("product");

for (let i = 0; i < favouriteItems.length; i++) {
    let item = favouriteItems.item(i);
    let productId = item.getElementsByClassName("product-card").item(0).id;
    let productImage = item.getElementsByTagName("img").item(0).getAttribute("src");
    let productLink = item.getElementsByTagName("a").item(0).getAttribute("href");
    let productTitle = item.getElementsByClassName("title").item(0).textContent;
    let productPrice = item.getElementsByClassName("price").item(0).textContent.substr(1);
    let addToCartButton = item.getElementsByTagName("button").item(0);
    let removeButton = item.getElementsByTagName("button").item(1);
    addToCartButton.addEventListener("click", function () {
        if (!updateProductQuantity(productTitle)) {
            let cartWrapperElement = createCartWrapperElement(productTitle, productLink, productImage, productPrice, productId);
            document.getElementById("cart-wrapper").appendChild(cartWrapperElement);
        }
        updateSubTotal(parseFloat(productPrice));
        updateCartBadge(1);
        addToUserCart(productId, 1);
    })

    removeButton.addEventListener("click", function () {
        item.style.transition = "1s";
        item.classList.add("fade-out");
        setTimeout(function () {
            document.getElementsByClassName("profile-main-content").item(0).removeChild(item);
            removeFavourite(productId);
        }, 1000)
    })
}