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