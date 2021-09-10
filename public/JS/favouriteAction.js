function addFavourite(productId) {
    $.post("../private/Includes/addToFavourite.php", {
        productId: productId
    }, function (data, status) {
        alert(data + " " + status);
        if (data.toString() === "display") {
            displayAddToFavouriteNotification();
        } else {
            window.location.pathname = "test/public/login.php";
        }
    });
}

function removeFavourite(productId) {
    $.post("../private/Includes/removeFromFavourite.php", {
        productId: productId
    }, function (data, status) {
        alert(data + " " + status);
        if (data.toString() === "display") {
            displayRemoveFromFavouriteNotification();
        } else {
            window.location.pathname = "test/public/login.php";
        }
    })
}