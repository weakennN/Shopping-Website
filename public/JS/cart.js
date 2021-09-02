window.addEventListener("resize", responsiveCartItem)

function responsiveCartItem() {
    let cartItems = document.getElementsByClassName("cart-item");
    let width = window.innerWidth;
    if (width <= 1199) {
        for (let i = 0; i < cartItems.length; i++) {
            let cartItem = cartItems.item(i);
            let pagination = cartItem.getElementsByClassName("pagination").item(0);
            let price = cartItem.getElementsByClassName("price").item(0);
            price.classList.add("ms-auto");
            let cartItemBottom = cartItem.getElementsByClassName("cart-item-bottom").item(0);
            cartItemBottom.append(pagination, price);
        }
    } else {
        for (let i = 0; i < cartItems.length; i++) {
            let cartItem = cartItems.item(i);
            let pagination = cartItem.getElementsByClassName("pagination").item(0);
            let price = cartItem.getElementsByClassName("price").item(0);
            price.classList.add("mb-0");
            let quantityHolder = cartItem.getElementsByClassName("quantity-holder").item(0);
            let totalHolder = cartItem.getElementsByClassName("total-holder").item(0);
            quantityHolder.appendChild(pagination);
            totalHolder.appendChild(price);
        }
    }
}

responsiveCartItem();

function initCartItemAction() {
    let cartItems = document.getElementsByClassName("cart-item");

    for (let i = 0; i < cartItems.length; i++) {
        let cartItem = cartItems.item(i);
        let productId = cartItem.id;
        let minusButton = cartItem.getElementsByClassName("increase-quantity-btn-minus").item(0);
        let quantityInput = cartItem.getElementsByClassName("quantity-input").item(0);
        let productTotalPriceEl = cartItem.getElementsByClassName("price").item(0);
        let productPrice = parseFloat(cartItem.getElementsByClassName("price").item(0).textContent.substr(1)) / parseInt(quantityInput.value);
        let plusButton = cartItem.getElementsByClassName("increase-quantity-btn-plus").item(0);
        let productQuantity = parseInt(quantityInput.value);
        let closeButton = cartItem.getElementsByClassName("btn-close").item(0);

        minusButton.addEventListener("click", function () {
            decrementQuantity(productId, quantityInput, cartItem);
            updateTotal(-productPrice);
            updateTotalProducts(-1)
            updateProductTotalPrice(-productPrice, productTotalPriceEl);
            productQuantity -= 1;
        })
        plusButton.addEventListener("click", function () {
            incrementQuantity(productId, quantityInput);
            updateTotal(productPrice);
            updateTotalProducts(1);
            updateProductTotalPrice(productPrice, productTotalPriceEl);
            productQuantity += 1;
        })
        quantityInput.addEventListener("input", function () {
            if (!isNaN(quantityInput.value.charAt(quantityInput.value.length - 1))) {
                setTimeout(function () {
                    if (quantityInput.value.localeCompare("") === 0
                        || quantityInput.value.localeCompare("0") === 0) {
                        cartItem.classList.add("fade-out");
                        setTimeout(function () {
                            document.getElementById("cart-item-holder").removeChild(cartItem);
                            updateTotal(-(productQuantity * productPrice));
                            updateTotalProducts(-productQuantity);
                            removeFromCart(productId);
                        }, 1000)
                    } else if (parseInt(quantityInput.value) !== productQuantity) {
                        updateTotalProducts(parseInt(quantityInput.value) - productQuantity);
                        updateTotal((parseInt(quantityInput.value) - productQuantity) * productPrice);
                        updateProductTotalPrice((parseInt(quantityInput.value) - productQuantity) * productPrice, productTotalPriceEl);
                        if (productQuantity < parseInt(quantityInput.value)) {
                            addToUserCart(productId, parseInt(quantityInput.value) - productQuantity);
                        } else {
                            removeCartItem(productId, productQuantity - parseInt(quantityInput.value));
                        }
                        productQuantity += parseInt(quantityInput.value) - productQuantity;
                    }
                }, 1000)
            } else {
                quantityInput.value = quantityInput.value.substr(quantityInput.value.length - 2, quantityInput.value.length - 1);
            }

        })
        closeButton.addEventListener("click", function () {
            cartItem.classList.add("fade-out");
            setTimeout(function () {
                document.getElementById("cart-item-holder").removeChild(cartItem);
                updateTotal(-productPrice * parseInt(quantityInput.value))
                removeFromCart(productId);
                updateTotalProducts(-parseInt(quantityInput.value));
                changeCartView();
            }, 1000)
        })
    }
}

initCartItemAction();

function incrementQuantity(productId, quantityInput) {
    updateQuantity(quantityInput, 1);
    addToUserCart(productId, 1);
    updateCartBadge(1);
}

function decrementQuantity(productId, quantityInput, cartItem) {
    let quantityValue = parseInt(quantityInput.value);
    if (quantityValue > 1) {
        updateQuantity(quantityInput, -1);
        updateCartBadge(-1);
        removeCartItem(productId, 1);
    } else {
        cartItem.classList.add("fade-out");
        setTimeout(function () {
            document.getElementById("cart-item-holder").removeChild(cartItem);
            removeFromCart(productId);
            changeCartView();
        }, 1000)
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
    let finalAmount = (totalAmount + value).toFixed(2);
    totalPrice.getElementsByClassName("cart-wrapper-price").item(0).textContent = "$" + finalAmount.substr(0, finalAmount.indexOf("."));
    totalPrice.getElementsByClassName("cent").item(0).textContent = finalAmount.substr(finalAmount.indexOf("."));
}

function changeCartView() {
    let cartItemHolder = document.getElementsByClassName("cart-item-holder").item(0);

    if (cartItemHolder.children.length <= 0) {
        console.log(cartItemHolder.children.length);
        let row = document.getElementsByClassName("row").item(0);
        while (row.children.length > 0) {
            row.removeChild(row.children.item(0));
        }
        let emptyCartContainer = document.createElement("div");
        emptyCartContainer.classList.add("col-12", "text-center");
        let h1 = document.createElement("h1");
        h1.classList.add("display-2")
        h1.textContent = "Your cart is empty";
        emptyCartContainer.appendChild(h1);
        let p = document.createElement("p");
        p.textContent = "Fill your cart and come back";
        p.classList.add("display-6", "mt-4")
        emptyCartContainer.appendChild(p);
        let button = document.createElement("a");
        button.style.color = "#ffffff";
        button.textContent = "Go to homepage"
        button.classList.add("btn", "btn-primary", "btn-lg", "mt-4", "empty-cart-button");
        button.setAttribute("href", "index.php");
        emptyCartContainer.appendChild(button);
        row.appendChild(emptyCartContainer);
    }
}

changeCartView();