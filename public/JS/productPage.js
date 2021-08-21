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
                        // dots: true
                    }
                }
            ]
        });
    },

    $("#add-to-cart").click(function () {
        let productId = window.location.href.substr(window.location.href.length - 1);
        let productTitle = document.getElementById("title").textContent;
        let productImageSource = document.getElementsByClassName("slick-track")[0].children.item(1).getAttribute("src");
        let productPrice = document.getElementById("price").textContent.substr(document.getElementById("price").textContent.indexOf("$") + 1);
        let productLink = window.location.href;

        if (!checkIfProductExist(productTitle)) {
            let cartWrapperProduct = createCartWrapperElement(productTitle, productLink, productImageSource, productPrice);
            document.getElementById("cart-wrapper").appendChild(cartWrapperProduct);
        }

        updateSubTotal(parseFloat(productPrice));

        $.post("../private/Includes/addToCart.php", {
            productId: productId
        }, function (data, status) {
        });

    })
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