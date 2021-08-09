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
    });
});

window.addEventListener("resize", function () {
    let sliderButtons = document.getElementsByClassName("slick-arrow");
    if (document.documentElement.clientWidth <= 1000) {
        for (let i = 0; i < sliderButtons.length; i++) {
            sliderButtons[i].style.display = "none";
        }
    } else if (document.documentElement.clientWidth > 1000 && sliderButtons[0].style.display === "none") {
        for (let i = 0; i < sliderButtons.length; i++) {
            sliderButtons[i].style.display = "block";
        }
    }
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