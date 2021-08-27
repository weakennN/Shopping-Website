localStorage.setItem("modify", "true");
window.addEventListener("resize", function () {
    let quantitiesHolders = document.getElementsByClassName("pagination");
    let width = window.innerWidth;
    if (width <= 1199 && localStorage.getItem("modify").localeCompare("true") === 0) {
        localStorage.setItem("modify", "false");
        let quantitiesHolders = document.getElementsByClassName("pagination");
        for (let i = 0; i < quantitiesHolders.length; i++) {
            let cartItem = quantitiesHolders.item(i).parentElement.parentElement.parentElement;
            let parent = quantitiesHolders.item(i).parentElement;
            parent.style.display = "none";
            cartItem.getElementsByClassName("total-holder").item(0).style.display = "none";
            let pagination = parent.children.item(0);
            parent.removeChild(parent.children.item(0));
            let priceTotalParent = cartItem.getElementsByClassName("total-holder").item(0);
            priceTotalParent.children.item(0).classList.add("ms-auto");
            cartItem.getElementsByClassName("cart-item-bottom").item(0).classList.add("mt-3");
            cartItem.getElementsByClassName("cart-item-bottom").item(0).appendChild(pagination);
            cartItem.getElementsByClassName("cart-item-bottom").item(0).appendChild(priceTotalParent.children.item(0));
        }
    } else if (width >= 1200 && localStorage.getItem("modify").localeCompare("false") === 0) {
        localStorage.setItem("modify", "true");
        for (let i = 0; i < quantitiesHolders.length; i++) {
            let cartItem = quantitiesHolders.item(i).parentElement.parentElement;
            let parent = quantitiesHolders.item(i).parentElement;
            let pagination = parent.children.item(0);
            parent.removeChild(parent.children.item(0));
            let priceTotal = parent.removeChild(parent.children.item(0));
            cartItem.getElementsByClassName("quantity-holder").item(0).appendChild(pagination);
            cartItem.getElementsByClassName("total-holder").item(0).appendChild(priceTotal);
            cartItem.getElementsByClassName("quantity-holder").item(0).style.display = "block"
            cartItem.getElementsByClassName("total-holder").item(0).style.display = "block";
            cartItem.getElementsByClassName("cart-item-bottom").item(0).classList.remove("mt-3");
        }
    }
});

function initCartItemAction() {
    let cartItems = document.getElementsByClassName("cart-item");

    for (let i = 0; i < cartItems.length; i++) {
        let cartItem = cartItems.item(i);
        let productId = cartItem.id;
        let productTitle = cartItem.getElementsByTagName("h5").item(0);
        let minusButton = cartItem.getElementsByClassName("increase-quantity-btn-minus").item(0);
        let quantityInput = cartItem.getElementsByClassName("quantity-input").item(0);
        let productTotalPriceEl = cartItem.getElementsByClassName("price").item(0);
        let productPrice = parseFloat(cartItem.getElementsByClassName("price").item(0).textContent.substr(1)) / parseInt(quantityInput.value);
        let plusButton = cartItem.getElementsByClassName("increase-quantity-btn-plus").item(0);
        let closeButton = cartItem.getElementsByClassName("btn-close").item(0);

        minusButton.addEventListener("click", function () {
            decrementQuantity(productId, quantityInput);
            updateTotal(-productPrice);
            updateTotalProducts(-1)
            updateProductTotalPrice(-productPrice, productTotalPriceEl);
            // TODO: remove one item form user cart or from cookie
        })
        plusButton.addEventListener("click", function () {
            incrementQuantity(productId, quantityInput);
            updateTotal(productPrice);
            updateTotalProducts(1);
            updateProductTotalPrice(productPrice, productTotalPriceEl);
        })
        quantityInput.addEventListener("input", function () {
            if (!isNaN(quantityInput.value.charAt(quantityInput.value.length - 1))) {

            } else {
                quantityInput.value = quantityInput.value.substr(quantityInput.value.length - 2, quantityInput.value.length - 1);
            }

        })
        closeButton.addEventListener("click", function () {
            // removeFromCartWrapperByTitle(productTitle, productId);
            // updateSubTotal(productPrice);
            cartItem.classList.add("fade-out");
            setTimeout(function () {
                document.getElementById("cart-item-holder").removeChild(cartItem);
                updateTotal(-productPrice * parseInt(quantityInput.value))
            }, 1000)
        })
    }
}

initCartItemAction();

function incrementQuantity(productId, quantityInput) {
    updateQuantity(quantityInput, 1);
    addToUserCart(productId);
    // updateProductQuantity(productTitle);
    updateCartBadge(1);
}

function decrementQuantity(productId, quantityInput) {
    let quantityValue = parseInt(quantityInput.value);
    if (quantityValue > 1) {
        updateQuantity(quantityInput, -1);
        updateCartBadge(-1);
        removeFromCart(productId);
    } else {
        // remove
    }
}

function updateQuantity(quantityInput, value) {
    let quantityInputValue = quantityInput.value;
    let finalValue = parseInt(quantityInputValue) + parseInt(value);
    quantityInput.value = finalValue.toString();
}

function updateTotal(value) {
    let total = document.getElementById("total");
    let totalAmount = parseFloat(total.textContent.substr(total.textContent.indexOf("$") + 1));
    totalAmount += value;
    total.textContent = "Total: $" + totalAmount.toFixed(2);
}

function updateTotalProducts(value) {
    let totalProducts = document.getElementById("total-products");
    let totalProductsValue = parseInt(totalProducts.textContent);
    totalProducts.textContent = (totalProductsValue + value).toString();
}

function updateProductTotalPrice(value, totalPrice) {
    let totalAmount = parseFloat(totalPrice.textContent.substr(1));
    totalPrice.textContent = "$" + (totalAmount + value);
}

