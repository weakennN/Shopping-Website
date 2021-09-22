function addToUserCart(productId, value) {
    $.post("../Includes/Cart/addToCart.php", {
        productId: productId,
        quantity: value
    }, function (data, status) {
    });
}

function removeFromCart(productId) {
    $.post("../Includes/Cart/removeFromCart.php", {
        productId: productId
    }, function (data, status) {
    });
}

function removeCartItem(productId, quantity) {
    $.post("../Includes/Cart/removeCartItem.php", {
        productId: productId,
        quantity: quantity
    }, function (data, status) {
    });
}