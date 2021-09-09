$(document).ready(
    function () {
        $('.gal').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            asNavFor: '.gal-nav',
        });
        $('.gal-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.gal',
            arrows: true,
            focusOnSelect: true,
            responsive: [
                {
                    breakpoint: 1000,
                    settings: {
                        arrows: false,
                    }
                }
            ]
        });
        let addToCartButton = document.getElementById("add-to-cart");
        let addToFavouriteButton = document.getElementById("add-to-favourite");
        let productId = window.location.href.substr(window.location.href.indexOf("id=") + 3);
        let productTitle = document.getElementById("title").textContent;
        let productImageSource = document.getElementsByClassName("slick-track")[0].children.item(1).getAttribute("src");
        let productPrice = document.getElementById("price").textContent.substr(document.getElementById("price").textContent.indexOf("$") + 1);
        let productLink = window.location.href;

        addToCartButton.addEventListener("click", function () {
            if (!updateProductQuantity(productTitle)) {
                let cartWrapperElement = createCartWrapperElement(productTitle, productLink, productImageSource, productPrice, productId);
                document.getElementById("cart-wrapper").appendChild(cartWrapperElement);
            }

            addToUserCart(productId, 1);
            updateCartBadge(1);
            updateSubTotal(parseFloat(productPrice));
        });

        addToFavouriteButton.addEventListener("click", function () {
            if (addToFavouriteButton.getElementsByTagName("i").item(0).classList.contains("far")) {
                addToFavouriteButton.getElementsByTagName("i").item(0).classList.replace("far", "fas");
                addFavourite(productId);
                displayAddToFavouriteNotification()
            } else {
                addToFavouriteButton.getElementsByTagName("i").item(0).classList.replace("fas", "far");
                removeFavourite(productId);
                displayRemoveFromFavouriteNotification()
            }
        })

        document.getElementsByClassName("slick-track").item(0).style.height = "556px";
    }
);

function imageClick(id) {
    let imageId = id.charAt(id.length - 1);
    let modalImages = document.getElementById("modal-content").children;
    for (let i = 0; i < modalImages.length; i++) {
        if (modalImages[i].classList.contains("active")) {
            modalImages[i].classList.remove("active");
            break;
        }
    }
    modalImages[parseInt(imageId)].classList.add("active");
}