function test() {
    if (document.documentElement.clientWidth <= 992) {
        document.getElementById("responsive-navbar").style.display = "block";
        document.getElementById("main-navbar").style.display = "none";
    } else if (document.getElementById("responsive-navbar").style.display === "block" && document.documentElement.clientWidth > 768) {
        document.getElementById("responsive-navbar").style.display = "none";
        document.getElementById("main-navbar").style.display = "block";
    }
}

window.addEventListener("resize", test);

test();

$(document).ready(function () {
    function toggleDropdown(e) {
        if (document.getElementById("cart-wrapper").children.length <= 0
            || window.location.href.localeCompare("http://localhost/test/public/cart.php") === 0
            || window.location.href === "http://localhost/test/public/checkout.php") {
            return;
        }
        const _d = $(e.target).closest('.cart-wrapper-dropdown'),
            _m = $('.cart-dropdown', _d);
        setTimeout(function () {
            const shouldOpen = e.type !== 'click' && _d.is(':hover');
            _m.toggleClass('show', shouldOpen);
            _d.toggleClass('show', shouldOpen);
            $('[data-toggle="dropdown"]', _d).attr('aria-expanded', shouldOpen);
        }, e.type === 'mouseleave' ? 300 : 0);
    }

    $('body')
        .on('mouseenter mouseleave', '.cart-wrapper-dropdown', toggleDropdown)
        .on('click', '.cart-dropdown a', toggleDropdown);


    // $('.dropdown a').on('click tap', e => e.preventDefault())
});

$(document).ready(function () {
    function toggleDropdown(e) {
        const _d = $(e.target).closest('.profile-dropdown'),
            _m = $('.profile-dropdown-menu', _d);
        setTimeout(function () {
            const shouldOpen = e.type !== 'click' && _d.is(':hover');
            _m.toggleClass('show', shouldOpen);
            _d.toggleClass('show', shouldOpen);
            $('[data-toggle="dropdown"]', _d).attr('aria-expanded', shouldOpen);
        }, e.type === 'mouseleave' ? 300 : 0);
    }

    $('body')
        .on('mouseenter mouseleave', '.profile-dropdown', toggleDropdown)
        .on('click', '.profile-dropdown-menu a', toggleDropdown);


    // $('.dropdown a').on('click tap', e => e.preventDefault())
});