function test() {
    window.addEventListener("resize", smt);
}

function smt() {
    let w = document.documentElement.clientWidth;
    if (w === 990) {
        alert("Hello");
        let div = document.createElement("div");
    } else if (w === 991) {
        alert("test");
    }
}

test();