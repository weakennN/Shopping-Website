function addFavourite(productId) {
    $.post("../private/Includes/addToFavourite.php", {
        productId: productId
    }, function (data, status) {
        alert(data + " " + status);
    });
}

function removeFavourite(productId) {
    $.post("../private/Includes/removeFromFavourite.php", {
        productId: productId
    }, function (data, status) {
        alert(data + " " + status);
    })
}