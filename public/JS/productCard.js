function initProductCardActions() {
    let productsCards = document.getElementsByClassName("product-card");

    for (let i = 0; i < productsCards.length; i++) {
        let productCard = productsCards.item(i);
        let productId = productCard.id;
        let addToFavoriteButton = productCard.getElementsByClassName("add-to-favourite").item(0);
        // init add to cart

        // init add to favourite
        addToFavourite(addToFavoriteButton, productId);
    }
}

initProductCardActions();

function addToFavourite(addToFavouriteButton, productId) {
    addToFavouriteButton.addEventListener("click", function () {
        if (addToFavouriteButton.classList.contains("far")) {
            // add to favourite
            addToFavouriteButton.classList.replace("far", "fas");
            $.post("../private/Includes/addToFavourite.php", {
                productId: productId
            }, function (data, status) {
              //  alert(data + " " + status);
            });
            displayAddToFavouriteNotification()
        } else {
            // remove from favourite
            addToFavouriteButton.classList.replace("fas", "far");
            $.post("../private/Includes/removeFromFavourite.php", {
                productId: productId
            }, function (data, status) {
               // alert(data + " " + status);
            })
            displayRemoveFromFavouriteNotification();
        }
    })
}