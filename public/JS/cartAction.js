function addToUserCart(productId, value) {
    $.post("../private/Includes/addToCart.php", {
        productId: productId,
        quantity: value
    }, function (data, status) {
        alert(data + " " + status);
    });
}

function removeFromCart(productId) {
    $.post("../private/Includes/removeFromCart.php", {
        productId: productId
    }, function (data, status) {
      alert(data);
    });
}

function removeCartItem(productId, quantity) {
    $.post("../private/Includes/removeCartItem.php", {
        productId: productId,
        quantity: quantity
    }, function (data, status) {
        alert(data);
    });
}