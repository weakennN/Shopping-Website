function test() {
    window.addEventListener("resize", smt);
}

function smt() {
    let w = document.documentElement.clientWidth;
    if (w <= 800) {
        let images = document.getElementById("images");
        images.children[0].style.display = "none";
        let dots = document.getElementById("dots");
        dots.style.display = "block";
    }
}

function click() {
    alert("yo");
}


test();