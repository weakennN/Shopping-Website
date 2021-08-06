<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="JS/test.js"></script>
    <link rel="stylesheet" href="style/productPage.css">
</head>
<body>
<?php include "header.php"; ?>
<div class="container">
    <div class="row">
        <div class="product-title text-left fs-2">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, quo!</p>
        </div>

    </div>
    <div class="row mt-4">
        <div class="col-lg-5 col-md-8 col-sm-12 text-center">
            <div class="image-container" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <img class="img-fluid" style="height: 100%;object-fit: contain"
                     src="recourses/images/ProductImages/3/spiritfarer-ps4-30.jpg" alt="#">
            </div>
            <div id="images">
                <nav>
                    <ul class="pagination h-100 justify-content-center" id="slider">
                        <li class="page-item" onclick="previousImage()"><a class="page-link" href="#">Previous</a></li>
                        <li class="using" id="1">
                            <div>
                                <img style="width: 80px"
                                     src="recourses/images/ProductImages/1/neo--the-world-ends-with-you-ps4-30.jpg"
                                     alt="">
                            </div>
                        </li>
                        <li class="page-item using" id="2">
                            <div>
                                <img style="width: 80px"
                                     src="recourses/images/ProductImages/2/smartfon-lg-g6---57---32gb--optical-black-30.jpg"
                                     alt="">
                            </div>
                        </li>
                        <li class="page-item using" id="3">
                            <div>
                                <img style="width: 80px"
                                     src="recourses/images/ProductImages/3/spiritfarer-ps4-30.jpg" alt="">
                            </div>
                        </li>
                        <li class="page-item" id="4" style="display: none"><a class="page-link" href="#">4</a></li>
                        <li class="page-item" id="5" style="display: none"><a class="page-link" href="#">5</a></li>
                        <li class="page-item" onclick="nextImage()"><a class="page-link" href="#"">Next</a></li>
                    </ul>
                </nav>

                <ul id="dots" class="list-inline text-center" style="display: none">
                    <li class="list-inline-item text-muted ph-dot">
                        <i class="fas fa-circle"></i>
                    </li>
                    <li class="list-inline-item text-muted ph-dot">
                        <i class="fas fa-circle"></i>
                    </li>
                    <li class="list-inline-item text-muted ph-dot">
                        <i class="fas fa-circle"></i>
                    </li>
                </ul>
            </div>
        </div>
        <div class=" col-lg-7 col-md-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, fugiat.</p>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-fullscreen-lg-down modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <div id="carouselExampleControls" class="carousel carousel-dark slide"
                                 data-bs-ride="carousel">
                                <div class="carousel-inner text-center">
                                    <div class="carousel-item active">
                                            <iframe width="100%" height="600" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="w-50"
                                             src="recourses/images/ProductImages/2/smartfon-lg-g6---57---32gb--optical-black-30.jpg"
                                             alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="w-50"
                                             src="recourses/images/ProductImages/3/spiritfarer-ps4-30.jpg"
                                             alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleControls"
                                        data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleControls"
                                        data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function nextImage() {
        let ul = document.getElementById("slider");
        let usingElements = document.getElementsByClassName("using");
        let id = parseInt(usingElements[usingElements.length - 1].id) + 1;

        if (id >= ul.children.length - 1) {
            return;
        }

        document.getElementById(id.toString()).style.display = "block";
        usingElements[0].style.display = "none";
        usingElements[0].classList.remove("using");
        document.getElementById(id.toString()).classList.add("using");
    }

    function previousImage() {
        let usingElements = document.getElementsByClassName("using");
        let id = parseInt(usingElements[0].id) - 1;

        if (id <= 0) {
            return;
        }

        document.getElementById(id.toString()).style.display = "block";
        usingElements[usingElements.length - 1].style.display = "none";
        usingElements[usingElements.length - 1].classList.remove("using");
        document.getElementById(id.toString()).classList.add("using");
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>

</body>
</html>
