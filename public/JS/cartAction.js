function addToUserCart(productId, value) {
    $.post("../private/Includes/CartInclude/addToCart.php", {
        productId: productId,
        quantity: value
    }, function (data, status) {
    });
}

function removeFromCart(productId) {
    $.post("../private/Includes/CartInclude/removeFromCart.php", {
        productId: productId
    }, function (data, status) {
    });
}

function removeCartItem(productId, quantity) {
    $.post("../private/Includes/CartInclude/removeCartItem.php", {
        productId: productId,
        quantity: quantity
    }, function (data, status) {
    });
}