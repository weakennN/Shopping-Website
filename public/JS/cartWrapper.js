function checkIfProductExist(productTitle) {
    let cartWrapper = document.getElementById("cart-wrapper");

    for (let i = 0; i < cartWrapper.children.length; i++) {
        let currentTitle = cartWrapper.children.item(i).getElementsByClassName("card-title").item(0).innerHTML;
        if (productTitle === currentTitle) {
            let quantityHtml = cartWrapper.children.item(i).getElementsByClassName("quantity").item(0).innerHTML;
            cartWrapper.children.item(i).getElementsByClassName("quantity").item(0).innerHTML = "x&nbsp;&nbsp;" + (parseInt(quantityHtml.charAt(quantityHtml.length - 1)) + 1);
            return true;
        }
    }

    return false;
}

function createCartWrapperElement(title, productLink, productImageSource, price) {
    let productCard = document.createElement("div");
    productCard.classList.add("card", "mb-2", "border-0");

    let productRow = document.createElement("div");
    productRow.classList.add("row", "g-0", "w-100");

    productCard.appendChild(productRow);

    let productImageCol = document.createElement("div");
    productImageCol.classList.add("col-4", "cart-wrapper-product-image");

    let productImageLink = document.createElement("a");
    productImageLink.setAttribute("href", productLink);

    let productImage = document.createElement("img");
    productImage.classList.add("img-fluid");
    productImage.setAttribute("src", productImageSource);

    productImageLink.appendChild(productImage);
    productImageCol.appendChild(productImageLink);
    productRow.appendChild(productImageCol);

    let productBodyCol = document.createElement("div");
    productBodyCol.classList.add("col-8", "w-75");

    productRow.appendChild(productBodyCol);

    let productCardBody = document.createElement("div");
    productCardBody.classList.add("card-body", "p-0", "ms-3", "mt-2");

    productBodyCol.appendChild(productCardBody);

    let productCardTopSide = document.createElement("div");
    productCardTopSide.classList.add("d-flex", "flex-row");

    productCardBody.appendChild(productCardTopSide);

    let productTitleAnchor = document.createElement("a");
    productTitleAnchor.classList.add("text-decoration-none");
    productTitleAnchor.setAttribute("href", productLink);

    let productTitle = document.createElement("h5");
    productTitle.classList.add("card-title", "title");
    productTitle.innerHTML = title;

    productTitleAnchor.appendChild(productTitle);
    productCardTopSide.appendChild(productTitleAnchor);

    let closeButton = document.createElement("button");
    closeButton.setAttribute("type", "button");
    closeButton.setAttribute("aria-label", "Close");
    closeButton.classList.add("btn-close", "ms-auto");

    productCardTopSide.appendChild(closeButton);

    let productCardBottomSide = document.createElement("div");
    productCardBottomSide.classList.add("d-flex", "flex-row", "mt-2");

    productCardBody.appendChild(productCardBottomSide);

    let priceHolder = document.createElement("div");
    let productPrice = document.createElement("p");
    let priceSpan = document.createElement("span");
    priceSpan.classList.add("cart-wrapper-price");
    let centSpan = document.createElement("span");
    centSpan.classList.add("cent");
    priceSpan.textContent = "$" + price.substr(0, price.indexOf("."))
    centSpan.textContent = price.substr(price.indexOf("."));
    productPrice.append(priceSpan, centSpan);
    priceHolder.appendChild(productPrice);

    productCardBottomSide.appendChild(priceHolder);

    let quantityHolder = document.createElement("div");
    quantityHolder.classList.add("ms-5");
    let quantity = document.createElement("p");
    quantity.classList.add("quantity", "text-muted" , "mt-2");
    quantity.innerHTML = "x&nbsp;&nbsp;1";
    quantityHolder.appendChild(quantity);

    productCardBottomSide.appendChild(quantityHolder);

    return productCard;
}

function updateSubTotal(priceToAdd) {
    let subTotal = document.getElementById("cart-wrapper-sub-total");
    let totalPrice = parseFloat(subTotal.children.item(0).textContent.substr(1));

    let newTotalPrice = totalPrice + priceToAdd;

    let finalPrice = "$" + newTotalPrice.toFixed(2);

    document.getElementById("cart-wrapper-price").innerText = finalPrice.substr(0, finalPrice.indexOf("."));
    document.getElementById("cart-wrapper-cent").innerText = finalPrice.substr(finalPrice.indexOf("."));
}