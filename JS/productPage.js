jQuery(document).ready(function () {
    jQuery('.gal').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        asNavFor: '.gal-nav',
    });
    jQuery('.gal-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.gal',
        arrows: true,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 1000,
                settings: {
                    arrows: false
                }
            }
        ]
    });
});

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