function addFavourite(productId) {
    $.post("../Includes/Favourite/addToFavourite.php", {
        productId: productId
    }, function (data, status) {
        if (data.toString() === "display") {
            displayAddToFavouriteNotification();
        } else {
            window.location.pathname = "login.php";
        }
    });
}

function removeFavourite(productId) {
    $.post("../Includes/Favourite/removeFromFavourite.php", {
        productId: productId
    }, function (data, status) {
        if (data.toString() === "display") {
            displayRemoveFromFavouriteNotification();
        } else {
            window.location.pathname = "login.php";
        }
    })
}